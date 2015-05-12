<?php if(!defined('BASEPATH'))exit('No direct script access allowed');
/**
$this->load->library('nama_library');
$this->load->helper('nama_helper');
$this->load->pluggin('nama_pluggin');
Membuat library sendiri
* CSVReader Class
* @author Pierre-Jean Turpeau
* @link http://www.CodeIgniter.com/wiki/CSVReader
*/
class csv_reader {
var $fields;
var $separator=';';
var $enclosure='"';
var $max_row_size=4096;
/**
* Parse a file containing CSV formatted data.
*
* @access public
* @param string
* @param boolean
* @return array
*/
function parse_file($p_Filepath, $p_NamedFields=true)
{
$content=false;
$file= fopen($p_Filepath,'r');
if($p_NamedFields)
{
$this->fields = fgetcsv($file,$this->max_row_size,
$this->separator,$this->enclosure);
}
while(($row= fgetcsv($file,$this->max_row_size, 
$this->separator,$this->enclosure))!=false)
{
if($row[0]!=null)
{// skip empty lines
if(!$content){$content=array();}
if($p_NamedFields)
{
$items=array();
foreach($this->fields as$id=>$field)
{
if(isset($row[$id]))
{$items[$field]=$row[$id];}
}
$content[]=$items;
}
else
{ $content[]=$row; }
}
}
fclose($file);
return $content;
}
}
