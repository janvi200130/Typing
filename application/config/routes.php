<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['index'] = 'AdminController/index';
$route['ED'] = 'AdminController/event_delete';
$route['ND'] = 'AdminController/news_delete';
$route['EA'] = 'AdminController/add_newss';
$route['SE'] = 'AdminController/show_events';
$route['Show_News'] = 'AdminController/show_news';
$route['Update_News'] = 'AdminController/show_up_news';
$route['SDelete'] = 'AdminController/stu_delete';
$route['all_video'] = 'AdminController/all_videos';
$route['delete_video'] = 'AdminController/delete_video';
$route['All_Student'] = 'AdminController/all_student';

$route['add_video'] = 'AdminController/add_videos';

$route['GD'] = 'AdminController/gallery_delete';
$route['admin'] = 'AdminController/alogin';
// $route['Admin_Logout'] = 'AdminController/logout';
$route['up'] = 'AdminController/up_n';
$route['Admin_Add'] = 'AdminController/sign_up';
$route['veiwstu'] = 'AdminController/veiwstu';
$route['set_exam'] = 'AdminController/set_exam';
$route['add_question'] = 'AdminController/add_question';

$route['add_paper'] = 'AdminController/add_paper';
$route['paper_data'] = 'AdminController/paper_data';
$route['paper_list'] = 'AdminController/paper_list';
$route['delete_paper'] = 'AdminController/delete_paper';
$route['paper_update'] = 'AdminController/paper_update';
$route['finalupdate'] = 'AdminController/finalupdate';

$route['all_paper'] = 'AdminController/all_paper';

$route['Add_Notice'] = 'AdminController/add_notice';
$route['add_course'] = 'AdminController/add_course';

$route['declare_result'] = 'AdminController/declare_result';

$route['view_exam_result'] = 'AdminController/view_exam_result';

$route['student_registration'] = 'AdminController/student_registration';
$route['registype'] = 'AdminController/registype';
$route['delete_regist/(:any)'] = 'AdminController/delete_regist/$1';
$route['view_exams'] = 'AdminController/view_exams';

$route['upload_admission'] = 'AdminController/upload_admission';
$route['ad_form_list'] = 'AdminController/ad_form_list';
$route['ad_f_delete'] = 'AdminController/ad_f_delete';
$route['Admin_Contact'] = 'AdminController/all_msg';
$route['Delete_Msg'] = 'AdminController/delete_msg';
$route['Delete_Career'] = 'AdminController/career_delete';
$route['All_Career'] = 'AdminController/all_career';
$route['add_frenchies_form'] = 'AdminController/add_frenchies_form';
$route['frenchies_form_list'] = 'AdminController/frenchies_form_list';
$route['delete_frenchies'] = 'AdminController/delete_frenchies';
$route['add_staff'] = 'AdminController/add_staff';
$route['staff_list'] = 'AdminController/staff_list';
$route['delete_staff'] = 'AdminController/delete_staff';

$route['add_notification'] = 'AdminController/add_notification';
$route['notification_data'] = 'AdminController/notification_data';
$route['notification_list'] = 'AdminController/notification_list';
$route['delete_list'] = 'AdminController/delete_list';

$route['our_branches'] = 'AdminController/our_branches';
$route['add_student'] = 'AdminController/add_student'; 

$route['enquiry_list'] = 'AdminController/enquiry_list';
$route['enquiry_data'] = 'AdminController/enquiry_data';
$route['delete_enquiry'] = 'AdminController/delete_enquiry';

$route['delete_data'] = 'AdminController/delete_data';
$route['delete_question'] = 'AdminController/delete_question';
$route['delete_exam'] = 'AdminController/delete_exam';
$route['delete_subject'] = 'AdminController/delete_subject';
$route['exam_list'] = 'AdminController/exam_list';
$route['subject_list'] = 'AdminController/subject_list';
$route['question_list'] = 'AdminController/question_list';
$route['all-exam'] = 'AdminController/show_all_exam';
$route['exam_edit'] = 'AdminController/exam_edit';
$route['change_status'] = 'AdminController/change_status';

$route['exam'] = 'AdminController/exam';

// Typing Route Front End ...........

$route['default_controller'] = 'HomeController';
$route['home'] = 'HomeController/index';
$route['about'] = 'HomeController/about';
$route['video'] = 'HomeController/video';
$route['gallery'] = 'HomeController/t_gallery';
$route['course'] = 'HomeController/course';
$route['team'] = 'HomeController/team';
$route['service'] = 'HomeController/service';
$route['notification'] = 'HomeController/notification';
$route['payment_pro'] = 'HomeController/payment_pro';
$route['testimonial'] = 'HomeController/testimonial';
$route['contactus'] = 'HomeController/contactus';
$route['contactdata'] = 'HomeController/contactdata';

$route['user_info'] = 'HomeController/user_info';
$route['user_data'] = 'HomeController/user_data';

$route['regist'] = 'HomeController/regist';
$route['regist_store'] = 'HomeController/regist_store';
$route['log_in'] = 'HomeController/login';
$route['dash'] = 'HomeController/dash_login';
$route['enquiry'] = 'HomeController/enquiry';
$route['add_result'] = 'HomeController/add_result';
$route['list_result'] = 'HomeController/result_list';

$route['paper_info'] = 'HomeController/paper_info';
$route['paper_view'] = 'HomeController/paper_view';
$route['message'] = 'HomeController/message';

// Typing Route Front End ...........


$route['Msg'] = 'HomeController/msg';
$route['submit_exam'] = 'HomeController/paper_submit';

// new update

$route['exam-complete'] = 'HomeController/exam_complete';


$route['all-answers'] = 'HomeController/show_questions';


$route['timeup'] = 'HomeController/exam_over';
$route['exam_paper_final'] = 'HomeController/exam_paper_final';
$route['show_result'] = 'HomeController/show_result';
$route['registration'] = 'HomeController/registration';
$route['stu_login'] = 'HomeController/stu_login';
$route['resultslist'] = 'HomeController/resultslist';
$route['about'] = 'HomeController/about';
$route['Career'] = 'HomeController/career';
$route['News_Details'] = 'HomeController/news_read';
$route['News'] = 'HomeController/alln';
$route['dcadetails'] = 'HomeController/dcadetails';
$route['bcadetails'] = 'HomeController/bcadetails';
$route['pgdcadetails'] = 'HomeController/pgdcadetails';
$route['mcadetails'] = 'HomeController/mcadetails';
$route['apply'] = 'HomeController/apply';
$route['faculty'] = 'HomeController/faculty';
$route['mission'] = 'HomeController/mission';
$route['infras'] = 'HomeController/infras';
$route['privacy'] = 'HomeController/privacy';
$route['contact'] = 'HomeController/contact';
// $route['gallery'] = 'HomeController/gallery';
$route['All_N'] = 'HomeController/all_noti';
$route['event'] = 'HomeController/event';
$route['allcourse'] = 'HomeController/allcourse';
$route['all-course'] = 'HomeController/all_course';
$route['viewdetails'] = 'HomeController/viewdetails';
$route['exam_paper'] = 'HomeController/exam_paper';
$route['dashboard'] = 'HomeController/dashboard';
$route['registration_user'] = 'HomeController/registration_user';
$route['registration_user2'] = 'HomeController/registration_user2';



$route['payment'] = 'HomeController/payment';
$route['frenchies_application'] = 'HomeController/frenchies_application';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
