<?php
    class ExerciseString{
        public $check1;
        public $check2;
        public function readFile($file){
            $myFile = fopen($file,"r");
            if(!$myFile){
                return "Open file failed";
            }
            else{
                return fread($myFile,filesize($file));
            }
        }
        public function checkVaildString($string)
        {
            $string = " " . $string;
            $check1 = strpos($string, "book");
            $check2 = strpos($string, "restaurant");
            if ($check1 && !$check2 || !$check1 && $check2) {
                $count = substr_count($string, '.');
                return "Chuỗi hợp lệ. chuỗi bao gồm $count câu!";
            } else {
                return "Chuỗi không hợp lệ";
            }
        }
        public function writeFile(){
            $myFile = fopen('result_file.txt','w');
            $text = "chuỗi 1: $this->check1 <br/> chuỗi 2: $this->check2";
            fwrite($myFile,$text);
            echo fread(fopen('result_file.txt','r'),filesize('result_file.txt'));
        }
    }
    // file1
    $obj1 = new ExerciseString();
    $text1 = $obj1->readFile("file1.txt");
    $obj1->check1 = $obj1->checkVaildString($text1);
    // file2
    $text2 = $obj1->readFile("file2.txt");
    $obj1->check2 = $obj1->checkVaildString($text2);
    $obj1->writeFile();
?>
