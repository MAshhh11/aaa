<?php

namespace App\Service;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer as Writer;
use Symfony\Component\HttpFoundation\StreamedResponse;


class Generator {

    protected $em;
    private $container;
    private $router;
    private $session;

    public function __construct(ManagerRegistry $em, Container $container, UrlGeneratorInterface $router, SessionInterface $session)
    {
        $this->em = $em;
        $this->container = $container;
        $this->router = $router;
        $this->session = $session;
    }

    public function getName() {
        return 'Generator';
    }
    
    public function generateSheetXLS($titles,$columns,$results, $title = NULL)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $styleTitle = $this->getTemplate("title");
        $styleSubtitle = $this->getTemplate("subtitle");
        $r = 1;
        
        if($title) {
            $sheet->setCellValue('A1', $title);
            $r++;
        } 
        
        foreach($titles as $i => $title) {
            $last = $this->getAz($i);
            $sheet->setCellValue($this->getAz($i).$r, $title);
        }
        
        $spreadsheet->getActiveSheet()->mergeCells("A1:".$last."1");
        $sheet->getStyle("A1:".$last."1")->applyFromArray($styleTitle);
        
        $sheet->getStyle('A'.$r.':'.$last.$r)->applyFromArray($styleSubtitle);
        $r++;
        
       foreach($results as $i => $result) {
           $i = $i+3;
           
           foreach($columns as $y => $column) {
                $cel = $result[$column];
                $sheet->setCellValue($this->getAz($y).$i, $cel);
           }
       }       
       
        foreach(range('A','Z') as $columnID) {
            $sheet->getColumnDimension($columnID)->setAutoSize(true);
        }

        $writer = new Writer\Xls($spreadsheet);
        
        return $writer;
    }
    
    public function getAz($i) {
        $az =  array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
        return $az[$i];
    }
    
    
    public function getTemplate($type = NULL)
    {
        if($type == "title") {
            $config = [
                'font' => [
                    'bold' => true,
                    'color' => array('rgb' => '000000'),
                ],
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                ],
                'borders' => [
                    'outline' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    ],
                ],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => ['rgb' => 'f7d136'],
                ],
            ];
        } else {
            
            $config = [
                'font' => [
                    'bold' => true,
                    'color' => array('rgb' => 'FFFFFF'),
                ],
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                ],
                'borders' => [
                    'outline' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    ],
                ],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => ['rgb' => '385E9D'],
                ],
            ];
        }
        
        return $config;
        
    }
}
?>
