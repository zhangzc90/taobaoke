<?php
	namespace Admin\Controller;
	use Think\Controller;
	class AbcController extends Controller{
		private function excel(){
			vendor('PHPExcel.PHPExcel.IOFactory');
			$file= $_SERVER['DOCUMENT_ROOT'].HOME.'upload/excel/a.xlsx';
			$fileType=\PHPExcel_IOFactory::identify($file);//获取文件类型
			$reader=\PHPExcel_IOFactory::createReader($fileType);//获取文件读取的对象
			$sheetName='Sheet1';
			$reader->setLoadSheetsOnly($sheetName);//加载指定的sheet
			$objExcel=$reader->load($file);
			$rows=array();//行数据集合
			$sheets=array();
			foreach ($objExcel->getWorksheetIterator() as $sheet) {//读取sheet
				foreach($sheet->getRowIterator() as $row){//读取行数据
					if($row->getRowIndex()<2)//略过第一行数据
						continue;
					$row_array=array();					
					foreach($row->getCellIterator() as $cell){
						array_push($row_array, $cell->getValue());					
					}
					array_push($rows, $row_array);
				}
				array_push($sheets, $rows);
			}
			return $sheets;
		}

		public function index(){
			$excel=$this->excel();
			$model=M('profile','w_','mysql://root:zhangzc@localhost/w_party#utf8');
			foreach ($excel as $sheet) {
				foreach ($sheet as $row) {
					if(strpos($row[7],'.')>0)
						$year=substr($row[7],0,strpos($row[7],'.'));
					else
						$year=$row[7];
					$data=array(
						'name'			=>$row[0],
						'img'			=>'',
						'years'			=>$year,
						'rank'			=>0,
						'time'			=>time(),
						'village'		=>$row[3],
						'gender'		=>$row[1]=='男'?'1':'2',
						'nation'		=>$row[2],
						'jointime'		=>str_replace('.','/',$row[6]),
						'idcard'		=>$row[4],
						'tel'			=>$row[5],
						'mark'			=>'',
					);
					// $res=$model->add($data);
					echo $res.'<br>';
				}
			}
		}
	}
?>