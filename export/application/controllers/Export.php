<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Export extends CI_Controller {

	public function index(){
		$this->load->model('Task');
		$data['record'] = $this->Task->getgrade();
		$this->load->view('grade', $data);
	}
	public function mygrade()
	{
		
		$this->load->model('Task');

		
		$data['record'] = $this->Task->getgrade();

		require (APPPATH. 'third_party/PHPExcel-1.8/Classes/PHPExcel.php');
		require (APPPATH. 'third_party/PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

		$objPHPExcel = new PHPExcel();
		$objPHPExcel->getProperties()->setCreator("Jaime ramos jr");
		$objPHPExcel->getProperties()->setLastModifiedBy("");
		$objPHPExcel->getProperties()->setTitle("");
		$objPHPExcel->getProperties()->setSubject("");
		$objPHPExcel->getProperties()->setDescription("");

		$objPHPExcel->setActiveSheetIndex(0);

		$objPHPExcel->getActiveSheet()->setCellValue('A4','Name');
		$objPHPExcel->getActiveSheet()->setCellValue('B5','PL');
		$objPHPExcel->getActiveSheet()->setCellValue('C5','MT');
		$objPHPExcel->getActiveSheet()->setCellValue('D5','PF');
		$objPHPExcel->getActiveSheet()->setCellValue('E5','F');
		$objPHPExcel->getActiveSheet()->setCellValue('F5','AVE');

		$objPHPExcel->getActiveSheet()->setCellValue('G5','PL');
		$objPHPExcel->getActiveSheet()->setCellValue('H5','MT');
		$objPHPExcel->getActiveSheet()->setCellValue('I5','PF');
		$objPHPExcel->getActiveSheet()->setCellValue('J5','F');
		$objPHPExcel->getActiveSheet()->setCellValue('K5','AVE');
		
		$objPHPExcel->getActiveSheet()->setCellValue('L4','FINAL GRADE');
		$objPHPExcel->getActiveSheet()->setCellValue('M4','REMARKS');
		
		$objPHPExcel->getActiveSheet()->setCellValue('B4','CLASS STANDING');
		$objPHPExcel->getActiveSheet()->setCellValue('G4','MAJOR EXAMS');
		
	
		//header style and merge
		$objPHPExcel->getActiveSheet()->mergeCells('A1:M3');
		$objPHPExcel->getActiveSheet()->mergeCells('B4:F4');
		$objPHPExcel->getActiveSheet()->mergeCells('G4:K4');
		$objPHPExcel->getActiveSheet()->mergeCells('A4:A5');
		$objPHPExcel->getActiveSheet()->mergeCells('L4:L5');
		$objPHPExcel->getActiveSheet()->mergeCells('M4:M5');
		$objPHPExcel->getActiveSheet()->setCellValue('A1', 'BASIC GRADING SYSTEM');
		
		$objPHPExcel->getActiveSheet()->getStyle('A4:M5')->getFont()->setSize(20)->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$style = array('font' => array('size' => 20,'bold' => true,'color' => array('rgb' => 'ff0000')));
		$objPHPExcel->getActiveSheet()->getStyle('A1:M3')->applyFromArray($style);
		
		

		//pang set ng width ng column
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(25);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(6);
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(6);
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(6);
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(6);
		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(7);

		$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(6);
		$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(6);
		$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(6);
		$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(6);
		$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(7);
		$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(15);
		$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(15);

		$sharedStyle1 = new PHPExcel_Style();
		$sharedStyle2 = new PHPExcel_Style();
		$sharedStyle3 = new PHPExcel_Style();
			
			$sharedStyle1->applyFromArray(
				array('fill' 	=> array(
											'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
											'color'		=> array('argb' => 'FFCCFFCC')
										),
					  'borders' => array(
											'allborders'	=> array('style' => PHPExcel_Style_Border::BORDER_THIN)
											
										)
			));

			
			$sharedStyle2->applyFromArray(
							array('fill' 	=> array(
														'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
														'color'		=> array('argb' => 'CCCCCCCF')
													),
								  'borders' => array(
													'allborders'	=> array('style' => PHPExcel_Style_Border::BORDER_THIN)
													)
						));
						
			$sharedStyle3->applyFromArray(
							array('fill' 	=> array(
														'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
														'color'		=> array('rgb' => 'ff8121')
													),
								   'borders' => array(
													'allborders'	=> array('style' => PHPExcel_Style_Border::BORDER_THIN)
													),
									'font' => array(
													'size' => 12,
													'bold' => true
												)
						));
			

		//title header style 	
		$objPHPExcel->getActiveSheet()->setSharedStyle($sharedStyle3, "A4:M5");
			
		$row = 6;
		foreach ($data['record'] as $key => $value) {
			//class standing
			$objPHPExcel->getActiveSheet()->setCellValue('A'.$row,$value->name);
			$objPHPExcel->getActiveSheet()->setCellValue('B'.$row,$value->cs_pl);
			$objPHPExcel->getActiveSheet()->setCellValue('C'.$row,$value->cs_mt);
			$objPHPExcel->getActiveSheet()->setCellValue('D'.$row,$value->cs_pf);
			$objPHPExcel->getActiveSheet()->setCellValue('E'.$row,$value->cs_f);
			$objPHPExcel->getActiveSheet()->setCellValue('F'.$row,'=AVERAGE(B'.$row.':E'.$row.')');
			//major exams
			$objPHPExcel->getActiveSheet()->setCellValue('G'.$row,$value->me_pl);
			$objPHPExcel->getActiveSheet()->setCellValue('H'.$row,$value->me_mt);
			$objPHPExcel->getActiveSheet()->setCellValue('I'.$row,$value->me_pf);
			$objPHPExcel->getActiveSheet()->setCellValue('J'.$row,$value->me_f);
			$objPHPExcel->getActiveSheet()->setCellValue('K'.$row,'=AVERAGE(G'.$row.':J'.$row.')');
			
			$objPHPExcel->getActiveSheet()->setCellValue('L'.$row,'=AVERAGE(G'.$row.',K'.$row.')');
			$objPHPExcel->getActiveSheet()->setCellValue('M'.$row,'=IF(L'.$row.'>100,"OUT OF RANGE",IF(L'.$row.'>74,"PASSED","FAILED"))');
			
			$row++;
			
		}
		for($count=6;$count<$row;$count +=2){
			 $objPHPExcel->getActiveSheet()->setSharedStyle($sharedStyle2, 'A'.$count.':M'.$count);
		}
		for($count2=7;$count2<=$row;$count2 +=2){
			 $objPHPExcel->getActiveSheet()->setSharedStyle($sharedStyle1, 'A'.$count2.':M'.$count2);
		}
		
		$objPHPExcel->getActiveSheet()->getStyle("A6:L".$row)->getNumberFormat()->setFormatCode('0.00'); 
			


		    $objPHPExcel->getActiveSheet()
		    ->getStyle('A1:M3')
		    ->getFill()
		    ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
		    ->getStartColor()
		    ->setARGB('#1E90FF');

		$filename = "Grade".date("Y-m-d-H-i-s").'.xlsx';
		$objPHPExcel->getActiveSheet()->setTitle('Grade');
		
		

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');

		$writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		ob_end_clean();
		$writer->save('php://output');
		 exit;
	}
	


}
