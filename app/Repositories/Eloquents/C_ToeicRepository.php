<?php

namespace App\Repositories\Eloquents;
use Sunra\PhpSimple\HtmlDomParser;
use App\Repositories\Contracts\C_ToeicRepositoryInterface;
use App\Model\tbl_question;
use App\Service\ExcelService;
use App\Exports\InvoicesExport;
use Maatwebsite\Excel\Facades\Excel;
use Request;
class C_ToeicRepository implements C_ToeicRepositoryInterface 
{
	public function list_question()
	{
		$data = tbl_question::join('tbl_answer','tbl_question.answer_id','=','tbl_answer.id')->join('tbl_part','tbl_question.part_id','=','tbl_part.id')->get();
		return view('backend.toeic',['data'=>$data]);
		
	}
	public function download_question()
	{ 
		$ch = curl_init('https://www.tienganh123.com/de-thi-thu-full/10048-TOEIC-full-test-1.html');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $content = curl_exec($ch);
        curl_close($ch);
        $dom = HtmlDomParser::str_get_html($content);
        //echo'<pre>';var_dump($content);die;
        //$answer_part1=$dom->find("#page-container .playfield  .test-playfield .full-toeic-test .test-content section#part-1 .example span");
        $answer_part1=$dom->find(".bg_center .contents .containt_center_cen .containt_center_cen_left .comment_bai_hoc .details .basic_box .toeic_center .toeic_box_cnt .toeic_main .toeic_segment .toeic_question .toeic_ques div");
        $arr = array();
        $i=0;
        foreach ($answer_part1 as $link) {
            $arr[$i]=$link->innertext;
            //$arr[$i]=$link->for;
            //$arr[$i]=$link->title;
        	$i++;
        }
        //dd($arr);

        
	}
	public function edit_question($id)
	{
		
	}
	public function do_edit_question($id)
	{
		
	}
	public function delete_question($id)
	{
		
	}
	public function add_question()
	{
		return view('backend.add_edit_question');
	}
	private function post_add_question()
	{
		$url = Request::get('A');
		echo $url;
	}
	private function post_add_question_excel()
	{
		$excel = new ExcelService();
		$file = 'excel_question';
		if($excel->hasFile($file))
		{
			if($excel->Extension($file) == true && $excel->Size($file) == true)
			{
				echo "oke";
			}
			else
			{
				$excel->Error();
			}
		}
	}
	public function do_add_question()
	{
		// $excel = new ExcelService();
		// $file = 'excel_question';
		// if($excel->hasFile($file))
		// {
		// 	if($excel->Extension($file) == true && $excel->Size($file) == true)
		// 	{
		// 		return "oke";
		// 	}
		// 	else
		// 	{
		// 		$excel->Error();
		// 	}
		// }
		// else
		// {
		// 	$this->post_add_question();
		// }
		$this->post_add_question_excel();
		$this->post_add_question();
	}
}