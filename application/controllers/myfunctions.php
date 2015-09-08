f<?php

class MyFunctions extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        
        $this->load->model('users_model');

        $this->load->helper('form');

        $this->load->helper(array('form', 'url'));
	}





/*
| ====================================================================================================================
| "INDEX" -
| Shows the Homepage of our site.
| ====================================================================================================================
*/
    public function index()
    {
         $news_content = $this->db->get('table_news');
         $data = [ "news_publication" => $news_content ];

        $this->load->view( 'layouts/header', [ 'title' => 'Home' ] );
        $this->load->view( 'health-pages/news-publication', $data  );
        $this->load->view( 'layouts/footer' );
    }



    public function news_publication()
    {
        $this->load->view( 'layouts/header', [ 'title' => 'News & Publication' ] );
        $this->load->view( 'health-pages/news-publication' );
        $this->load->view( 'layouts/footer' );
    }

    public function guidelines()
    {
         $news_content = $this->db->get('table_news');
         $data = [ "news_publication" => $news_content ];

        $this->load->view( 'layouts/header', [ 'title' => 'Home' ] );
        $this->load->view( 'health-pages/guidelines', $data  );
        $this->load->view( 'layouts/footer' );
    }

    public function register_form($id)
    {

        $all_user_list = $this->db->get('table_user');
        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));

            $data = [ "records" => $all_user_list,
                        "user_data" => $user_list ];


        $this->load->view( 'layouts/header', [ 'title' => 'Registration' ] );
        $this->load->view( 'health-pages/register', $data );
        $this->load->view( 'layouts/footer' );
    }

    public function register_process($user_id)
    {

        $username = $this->input->post('username');


        $data =
        [

            'user_account' => $this->input->post('username'),
            'user_password' => md5($this->input->post('password')),
            'user_type' => $this->input->post('user_type'),
            'user_status' => $this->input->post('user_status')

        ];

        $rtpassword = md5($this->input->post('rtpassword'));

        if(md5($this->input->post('password')) != $rtpassword)
        {
            $all_user_list = $this->db->get('table_user');
            $msg = [    "records" => $all_user_list,
                        "msg" => "Sorry Password did not match."];
            $this->load->view('layouts/header', ['title' => 'Registration Form']);
            $this->load->view('health-pages/register', $msg);
            $this->load->view('layouts/footer');

        }

        elseif($this->input->post('username') == "")
        {   
            $all_user_list = $this->db->get('table_user');
            $msg = [    "records" => $all_user_list,
                        "msg" => "Sorry Username did not match."];
            $this->load->view('layouts/header', ['title' => 'Registration Form']);
            $this->load->view('health-pages/register', $msg);
            $this->load->view('layouts/footer');
           
        }

        elseif(md5($this->input->post('password')) == "")
        {   
            $all_user_list = $this->db->get('table_user');
            $msg = [    "records" => $all_user_list,
                        "msg" => "Sorry Username did not match."];
            $this->load->view('layouts/header', ['title' => 'Registration Form']);
            $this->load->view('health-pages/register', $msg);
            $this->load->view('layouts/footer');
           
        }

        else
        {


            $this->users_model->create_data_function('table_user', $data, 'showusers');

          
        $all_user_list = $this->db->get('table_user');
        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));

            $msg = [ "records" => $all_user_list,
                        "user_data" => $user_list ];
    
            $this->load->view('layouts/header', ['title' => 'Registration Form']);
            $this->load->view('health-pages/register',$msg);
            $this->load->view('layouts/footer');

        }
    }

    public function delete_user($deleted_id, $user_id)
    {

        $delete_movie = $this->users_model->delete_data_function('table_user', 'user_id', $deleted_id);
                   $all_user_list = $this->db->get('table_user');

        $all_user_list = $this->db->get('table_user');
        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));

            $msg = [ "records" => $all_user_list,
                        "user_data" => $user_list ];
    
            $this->load->view('layouts/header', ['title' => 'Registration Form']);
            $this->load->view('health-pages/register',$msg);
            $this->load->view('layouts/footer');

    }

    public function login_form()
    {
        $this->load->view( 'layouts/header', [ 'title' => 'Login' ] );
        $this->load->view( 'health-pages/login' );
        $this->load->view( 'layouts/footer' );
    }

    public function login_process()
    {

        if($result = $this->users_model->user_exists())
        {


        $query = $this->db->get_where('table_user', [ 'user_account' => $this->input->post('username') ] );

        foreach ($query->result() as $row)
        {
            $user_id = $row->user_id;
            $username = $row->user_account;
            $password = $row->user_password;
            $user_type = $row->user_type;
        }

        $query = $this->db->get_where('table_user', [ 'user_account' => $this->input->post('username') ] );



        $data =
        [
            'user_data' => $query,
            'user_account' => $this->input->post('username'),
            'user_password' => $this->input->post('password'),
            'user_id' => $user_id,
            'is_logged_in' => TRUE 
        ];



        if($result && $user_type == 1)
        {

            $session_data = $this->session->set_userdata($data);

        $all_user_list = $this->db->get('table_user');
        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));

            $data = [ "records" => $all_user_list,
                        "user_data" => $user_list ];
    
            $this->load->view('layouts/header', ['title' => 'Registration Form']);
            $this->load->view('health-pages/register',$data);
            $this->load->view('layouts/footer');
        }

        elseif ($result && $user_type == 0)
        {

   
        $this->load->view( 'layouts/header', [ 'title' => 'Activity' ] );
        $this->load->view( 'health-pages/activity', $data  );
        $this->load->view( 'layouts/footer' );
        } 

        }

        else
        {
            $data_error = [ "msg" => "SORRY, NO SUCH USER."];

            $this->load->view('layouts/header', ['title' => 'Home']);
            $this->load->view('health-pages/login', $data_error);
            $this->load->view('layouts/footer');


        }



    }

    public function post_activity($user_id)
    {

        $all_user_list = $this->db->get('table_user');
        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));

        $data1 =
        [

            'news_title' => $this->input->post('news_title'),
            'news_author' => $this->input->post('news_author'),
            'news_content' => $this->input->post('news_content'),     

        ];

        
        $this->users_model->create_data_function('table_news', $data1, 'showusers');

        $all_user_list = $this->db->get('table_user');
        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));

            $data = [ "records" => $all_user_list,
                        "user_data" => $user_list ];

        $this->load->view( 'layouts/header', [ 'title' => 'Activity' ] );
        $this->load->view( 'health-pages/activity', $data  );
        $this->load->view( 'layouts/footer' );
         

    }

    public function update_post_activity($news_id, $news_author, $user_id)
    {

        $all_user_list = $this->db->get('table_user');
        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));

        $data1 =
        [

            'news_title' => $this->input->post('news_title'),
            'news_author' => $this->input->post('news_author'),
            'news_content' => $this->input->post('news_content')
         
        ];

        
        $this->users_model->update_data_function('table_news', $data1, 'news_id', $news_id);

              $all_user_list = $this->db->get('table_user');
        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));

            $data = [ "records" => $all_user_list,
                        "user_data" => $user_list ];

       $this->load->view( 'layouts/header', [ 'title' => 'Activity' ] );
        $this->load->view( 'health-pages/activity', $data  );
        $this->load->view( 'layouts/footer' );

    }

    public function logout()
    {
        $this->session->sess_destroy($data);
        redirect('myfunctions/index');

    }

    public function selected_barangay($news_author)
    {
        
        $municipal = $this->db->get('table_news');
         $selected_municipal = $this->db->get_where('table_news', array('news_author' => $news_author));

    
         $data = [ "barangay" => $municipal,
                    "municipal_record" => $selected_municipal ];


        $this->load->view( 'layouts/header', [ 'title' => 'Home' ] );
        $this->load->view( 'health-pages/selected_barangay', $data  );
        $this->load->view( 'layouts/footer' );

    }

    public function update_activity($news_id, $news_author, $user_id)   {

        $all_user_list = $this->db->get_where('table_user', array('user_id' => $user_id));
        $user_list = $this->db->get_where('table_news', array('news_id' => $news_id));

            $data = [ "user_data" => $all_user_list,
                        "news_data" => $user_list ];

        $this->load->view('layouts/header', ['title' => 'Update Information']);
        $this->load->view('health-pages/update_activity_form', $data);
        $this->load->view('layouts/footer');
    }

    public function delete_activity($news_id, $news_author, $user_id)  
    {


        
        $this->users_model->delete_data_function('table_news', 'news_id', $news_id);

              $all_user_list = $this->db->get('table_user');
        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));

            $data = [ "records" => $all_user_list,
                        "user_data" => $user_list ];

       $this->load->view( 'layouts/header', [ 'title' => 'Activity' ] );
        $this->load->view( 'health-pages/activity', $data  );
        $this->load->view( 'layouts/footer' );

    }

   


    

/*
| ====================================================================================================================
| "MOVIE GUEST PAGE" -
| Shows the list of movies without loging-in in the site.
| ====================================================================================================================
*/
    public function GuestMoviePage ()
    {

        $this->load->view( 'layouts/header', [ 'title' => 'Crimson Leaf DVD Rental' ] );
        $this->load->view( 'finalpages/GuestMoviePage');
        $this->load->view( 'layouts/footer' );


    }





/*
| ====================================================================================================================
| "GUEST SELECTED MOVIE PAGE" -
| Shows the details of the selected movie from GUEST MOVIE PAGE.
| ====================================================================================================================
*/
    public function GuestSelectedMoviePage ($movie_id)
    {

        $movie_list = $this->db->get_where('table_movies', array('movie_id' => $movie_id ));

        $data = array( "movie_data" => $movie_list );

        $this->load->view( 'layouts/header', [ 'title' => 'Movies - Crimson Leaf' ] );
        $this->load->view( 'finalpages/GuestSelectedMoviePage', $data );
        $this->load->view( 'layouts/footer' );


    }


    public function GuestSelectedCategoryPage($movie_category)
    {

        $movie_list = $this->db->get_where('table_movies', array('movie_category' => $movie_category));

        $data = [ "movie_list" => $movie_list ];

        $this->load->view( 'layouts/header', [ 'title' => 'MOVIE LIST' ] );
        $this->load->view( 'finalpages/GuestSelectedCategoryPage', $data );
        $this->load->view( 'layouts/footer' );
    }





/*
| ====================================================================================================================
| "LOGIN FORM PAGE" - 
| Shows the Login form of our site.
| ====================================================================================================================
*/  
    public function LoginFormPage()
    {
        $this->load->view( 'layouts/header', [ 'title' => 'Create your Crimson Leaf Account' ] );
        $this->load->view( 'finalpages/LoginFormPage');
        $this->load->view( 'layouts/footer' );
    }





/*
| ====================================================================================================================
| "ADMIN MOVIE INFO PAGE" -
| Shows the details of the selected movie from the ADMIN MOVIE PAGE.
| ====================================================================================================================
*/

    public function AdminMovieInfoPage($movie_id, $user_id)
    {
        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));
        $movie_list = $this->db->get_where('table_movies', array('movie_id' => $movie_id));

            $data =  [ "movie_data" => $movie_list,
                       "user_data" => $user_list   ];

        $this->load->view( 'layouts/header', [ 'title' => 'MOVIE Details' ] );
        $this->load->view( 'finalpages/AdminMovieInfoPage', $data);
        $this->load->view( 'layouts/footer' );
    }





/*
| ====================================================================================================================
| "DELETE MOVIE PROCESS" - (Administrator page)
| This function will delete/erase the selected movie by the administrator and leads you to the movie page with the
| notification the if the movie was successfully deleted and also brings the data of the user.
| ====================================================================================================================
*/
    public function DeleteMovieProcess($id, $user_id)
    {

        $delete_movie = $this->users_model->delete_data_function('table_movies', 'movie_id', $id);

        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));
        $movie_list = $this->users_model->fetch_data_function('table_movies', 'movie_id');

            $data = [ "movie_list" => $movie_list,
                      "user_data" => $user_list,
                      "msg" => 'DVD successfully deleted.' ];

        $this->load->view( 'layouts/header', [ 'title' => 'Registration Form' ] );
        $this->load->view( 'finalpages/AdminMoviePage', $data );
        $this->load->view( 'layouts/footer' );
    }





/*
| ====================================================================================================================
| "ADMIN MOVIE PAGE" - (Administrator page)
| Shows the list of movies.
| ====================================================================================================================
*/
    public function AdminMoviePage($user_id)
    {

        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));
        $movie_list = $this->users_model->fetch_data_function('table_movies', 'movie_id');

            $data = [  "movie_list" => $movie_list,
                       "user_data" => $user_list   ];

        $this->load->view( 'layouts/header', [ 'title' => 'MOVIE LIST' ] );
        $this->load->view( 'finalpages/AdminMoviePage', $data );
        $this->load->view( 'layouts/footer' );
    }




/*
| ====================================================================================================================
| "ADMIN LIST SELECTED MOVIE PAGE" - (Administrator page)
| Shows the details of the selected movie.
| ====================================================================================================================
*/  
    public function AdminListSelectedMoviePage($user_id, $movie_category)
    {

        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));
        $movie_list = $this->db->get_where('table_movies', array('movie_category' => $movie_category));

            $data = [ "movie_list" => $movie_list,
                      "user_data" => $user_list ];

        $this->load->view( 'layouts/header', [ 'title' => 'MOVIE LIST' ] );
        $this->load->view( 'finalpages/AdminListSelectedMoviePage', $data );
        $this->load->view( 'layouts/footer' );
    }





/*
| ====================================================================================================================
| "ADMIN SHOW SELECTED REPORT PAGE" - (Administrator page)
| Shows the selected month of reports.
| ====================================================================================================================
*/
    public function AdminShowSelectedReportPage($user_id, $month)
    {

        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));
        $monthly_reports = $this->db->get_where('table_borrowers', array('month_rented' => $month));
        $total_sales = $this->db->query("SELECT MAX(no_copies) FROM table_borrowers where month_rented='".$month."'");

            $data = [ "monthly_reports" => $monthly_reports,
                      "user_data" => $user_list,
                      "total_sales" => $total_sales  ];

        $this->load->view( 'layouts/header', [ 'title' => 'MOVIE LIST' ] );
        $this->load->view( 'finalpages/AdminShowSelectedReportPage', $data );
        $this->load->view( 'layouts/footer' );
    }





/*
| ====================================================================================================================
| "ADMIN TRANSACTION PAGE" - (Administrator page)
| Shows all the logs of all users, the rented DVD's and returned DVD's.
| ====================================================================================================================
*/
    public function AdminTransactionPage($user_id)
    {

        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));
        $this->db->order_by('borrow_id', 'DESC');
        $all_user_transaction_list = $this->db->get('table_borrowers');

            $data = [ "user_data" => $user_list,
                      "record" => $all_user_transaction_list ];

        $this->load->view( 'layouts/header', [ 'title' => 'Crimson- Transaction' ] );
        $this->load->view( 'finalpages/AdminTransactionPage', $data );
        $this->load->view( 'layouts/footer' );

    }





/*
| ====================================================================================================================
| "ADMIN SHOW USERS PAGE" - (Administrator page)
| Shows all the information of all users except for the password.
| ====================================================================================================================
*/
    public function AdminShowUsersPage($user_id)
    {

        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));
        $all_user_list = $this->db->get('table_user');

            $data = [ "user_data" => $user_list,
                      "record" => $all_user_list ];

        $this->load->view( 'layouts/header', [ 'title' => 'Crimson Users' ] );
        $this->load->view( 'finalpages/AdminShowUsersPage', $data );
        $this->load->view( 'layouts/footer' );

    }





/*
| ====================================================================================================================
| "ADD MOVIE PAGE" - (Administrator page)
| Shows the add movie page with the data of the user.
| ====================================================================================================================
*/

    public function AdminAddMoviePage($user_id)
    {

        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));
        $query = $this->users_model->fetch_data_function('table_borrowers', 'borrow_id');

            $data = [ "user_data" => $user_list ];

        $this->load->view('layouts/header', ['title' => 'Crimson-Movies']);
        $this->load->view('finalpages/AdminAddMoviePage', $data);
        $this->load->view('layouts/footer');

    }





/*
| ====================================================================================================================
| "ADD MOVIE PROCESS" - (Administrator page)
| This function will work if the add movie button in the ADMIN ADD MOVIE PAGE is clicked.
| ====================================================================================================================
*/
    public function AddMovieProcess($user_id)
    {

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100000';
        $config['max_width']  = '100000';
        $config['max_height']  = '100000';
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);


        if ( !$this->upload->do_upload())
        {
            $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));

            $data = [ "user_data" => $user_list,
                      "msg" => 'Movie Unsuccessfully Added.' ];

            $this->load->view( 'layouts/header', [ 'title' => 'Add new Movie' ] );
            $this->load->view( 'finalpages/AdminAddMoviePage', $data );
            $this->load->view( 'layouts/footer' );
        }

        else
        {
            $movie_data = [ 'userfile' => $_FILES['userfile']['name'],
                            'movie_title' => $this->input->post('movie_title'),
                            'movie_category' => $this->input->post('movie_category'),
                            'language' => $this->input->post('language'),
                            'rating' => $this->input->post('rating'),
                            'release_year' => $this->input->post('release_year'),
                            'no_copies' => $this->input->post('no_copies'),
                            'movie_description' => $this->input->post('movie_description') ];

            $insert_movie = $this->users_model->create_data_function('table_movies', $movie_data);
        }


        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));

        $data = [ "user_data" => $user_list,
                  "msg" => 'Movie Sucessfully Added.' ];

        $this->load->view( 'layouts/header', [ 'title' => 'Add new Movie' ] );
        $this->load->view( 'finalpages/AdminAddMoviePage', $data );
        $this->load->view( 'layouts/footer' );

    }





/*
| ====================================================================================================================
| "ADMIN SHOW REPORT PAGE" - (Administrator page)
| Shows the reports of all DVD's in daily and monthly.
| ====================================================================================================================
*/
    public function AdminShowReportPage($user_id)
    {

        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));
        $query = $this->users_model->fetch_data_function('table_borrowers', 'borrow_id');

            $data = [ "user_data" => $user_list,
                      "record" => $query ];

        $this->load->view('layouts/header', ['title' => 'Crimson Reports']);
        $this->load->view('finalpages/AdminShowReportPage', $data);
     

    }





/*
| ====================================================================================================================
| "ADMIN EDIT MOVIE PAGE" - (Administrator page)
| Shows the edit form for the selected movie.
| ====================================================================================================================
*/
    public function AdminEditMoviePage($movie_id, $user_id)
    {

        $data = [ "movie_data" => $this->db->get_where('table_movies', ['movie_id' => $movie_id]),
                  "user_data" => $this->db->get_where('table_user', array('user_id' => $user_id)) ];

        $this->load->view('layouts/header', ['title' => 'Edit Movies']);
        $this->load->view('finalpages/AdminEditMoviePage', $data);
        $this->load->view('layouts/footer');

    }





    public function PendingProcess($borrow_id, $user_id)
    {



        $data = [ "dvd_status" => 'RETURNED'];

        $this->users_model->update_data_function('table_borrowers', $data, 'borrow_id', $borrow_id );

        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));
        $this->db->order_by('borrow_id', 'DESC');
        $all_user_transaction_list = $this->db->get('table_borrowers');

            $data = [ "user_data" => $user_list,
                      "record" => $all_user_transaction_list ];

        $this->load->view( 'layouts/header', [ 'title' => 'Pending' ] );
        $this->load->view( 'finalpages/AdminTransactionPage', $data );
        $this->load->view( 'layouts/footer' );



    }













/*
| ====================================================================================================================
| "USER MOVIE INFO PAGE" - (User page)
| Shows the details of the selected movie.
| ====================================================================================================================
*/
    public function UserMovieInfoPage($movie_id, $user_id)
    {

        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));
        $movie_list = $this->db->get_where('table_movies', array('movie_id' => $movie_id));

            $data = [ "movie_data" => $movie_list,
                      "user_data" => $user_list ];

        $this->load->view( 'layouts/header', [ 'title' => 'MOVIE Details' ] );
        $this->load->view( 'finalpages/UserMovieInfoPage', $data);
        $this->load->view( 'layouts/footer' );
    }





/*
| ====================================================================================================================
| "USER LIST SELECTED MOVIE PAGE" - (User page)
| Shows the details of the selected movie.
| ====================================================================================================================
*/
    public function UserListSelectedMoviePage($user_id, $movie_category)
    {

        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));
        $movie_list = $this->db->get_where('table_movies', array('movie_category' => $movie_category));

        $data = [ "movie_list" => $movie_list,
                  "user_data" => $user_list ];

        $this->load->view( 'layouts/header', [ 'title' => 'MOVIE LIST' ] );
        $this->load->view( 'finalpages/UserListSelectedMoviePage', $data );
        $this->load->view( 'layouts/footer' );
    }





/*
| ====================================================================================================================
| "USER TRANSACTION PAGE" -
| Shows the logs of the user, the rented DVD's and returned DVD's.
| ====================================================================================================================
*/
    public function UserTransactionPage($user_id)
    {

        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));
        $dvd_transaction = $this->users_model->fetch_data_function_where
        ('table_borrowers', 'borrow_id', "user_id = $user_id && dvd_status != 'RETURNED'" );

            $data = [ "user_data" => $user_list,
                      "record" => $dvd_transaction ];

        $this->load->view('layouts/header', ['title' => 'Crimson Transactions']);
        $this->load->view('finalpages/UserTransactionPage', $data);
        $this->load->view('layouts/footer');
     }





/*
| ====================================================================================================================
| "USER HOME PAGE" -
| Shows the homepage for users, with the data of the user.
| ====================================================================================================================
*/
    public function UserHomePage($user_id)
    {

        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));
        $movie_list = $this->users_model->fetch_data_function('table_movies', 'movie_id');

            $data = [ "movie_list" => $movie_list,
                      "user_data" => $user_list ];

        $this->load->view( 'layouts/header', [ 'title' => 'Crimson-Home' ] );
        $this->load->view( 'finalpages/UserHomePage', $data );
        $this->load->view( 'layouts/footer' );
    }





/*
| ====================================================================================================================
| "USER UPDATE ACCOUNT PAGE" -
| Shows the edit form of the user, only the username and password can be edited.
| ====================================================================================================================
*/
    public function UserUpdateAccountPage($user_id)
    {
        $data = [ "user_data" => $this->db->get_where('table_user', ['user_id' => $user_id]) ];

        $this->load->view('layouts/header', ['title' => 'Update Information']);
        $this->load->view('finalpages/UserUpdateAccountPage', $data);
        $this->load->view('layouts/footer');
    }





/*
| ====================================================================================================================
| "UPDATE PROCESS" -
| This function will work When the update button in the USER UPDATE ACCOUNT PAGE is clicked, it will get the new
| value of the username and password field from the form and change the data. When the password is not the same with
| the rtpassword, it will says that "password did not match." else it will go through the update model.
| ====================================================================================================================
*/
    public function UpdateProcess($user_id)
    {

            $data =
            [


            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))

            ];

            if(md5($this->input->post('password')) != md5($this->input->post('rtpassword')))
            {
                $data = [
                            "user_data" => $this->db->get_where('table_user', ['user_id' => $user_id]),
                            "msg" => "Sorry Password did not match." 
                        ];

                $this->load->view('layouts/header', ['title' => 'Update Form']);
                $this->load->view('finalpages/UserUpdateAccountPage', $data);
                $this->load->view('layouts/footer');

            }
            else
            {
            $this->users_model->update_data_function('table_user', $data, 'user_id', $user_id);

            $data_correct = [
                        "user_data" => $this->db->get_where('table_user', ['user_id' => $user_id]),
                        "msg" => "Account Sucessfully Updated." 
                    ];

                $this->load->view('layouts/header', ['title' => 'Update Form']);
                $this->load->view('finalpages/UserUpdateAccountPage', $data_correct);
                $this->load->view('layouts/footer');
        }
    }





/*
| ====================================================================================================================
| "USER RENT DVD PROCESS" -
| Shows the renters information, the data of the movie he/she wants to
| rent and let him/her decide how many DVD's he/she wants to rent.
| ====================================================================================================================
*/
    public function UserRentDVDProcess($movie_id, $user_id)
    {

        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));
        $movie_list = $this->db->get_where('table_movies', array('movie_id' => $movie_id));

            $data = [ "movie_data" => $movie_list,
                      "user_data" => $user_list ];

        $this->load->view('layouts/header', ['title' => 'Crimson - RENT FORM']);
        $this->load->view('finalpages/UserRentDVDProcess', $data);
        $this->load->view('layouts/footer');

    }





/*
| ====================================================================================================================
| "HOLDER DVD" -
| Shows the renters information, the data of the movie he/she wants to
| rent, the date when it was rented and when must be returned and also
| shows the total payment.
| ====================================================================================================================
*/
    public function UserHolderDVD($movie_id, $user_id)
    {

        $user_list = $this->db->get_where('table_user', ['user_id' => $user_id]);
        $movie_list = $this->db->get_where('table_movies', ['movie_id' => $movie_id]);

            $holder = [
                    'movie_data' => $movie_list,
                    'user_data' => $user_list,
                    'user_id' => $this->input->post('user_id'),
                    'firstname' => $this->input->post('firstname'),
                    'middlename' => $this->input->post('middlename'),
                    'lastname' => $this->input->post('lastname'),
                    'movie_title' => $this->input->post('movie_title'),
                    'movie_category' => $this->input->post('movie_category'),
                    'no_copies' => $this->input->post('no_copies')
                      ];

        $this->load->view('layouts/header', ['title' => 'Crimson- PAYMENTS']);
        $this->load->view('finalpages/UserHolderDVD', $holder);
        $this->load->view('layouts/footer');

    }





/*
| -------------------------------------------------------------------
| "LOGIN PROCESS" - 
| This function will work if the form in Login page was submitted,
| it will check if the data entered by the user exist.
|
| If data exist then it will check if the USER_TYPE is equals to 1
| which is the administrator then it will lead you to the administrator page.
| else it will lead you to the user page.
| -------------------------------------------------------------------
*/
    public function LoginProcess()
    {

        if($result = $this->users_model->user_exists())
        {


        $query = $this->db->get_where('table_user', [ 'username' => $this->input->post('username') ] );

        foreach ($query->result() as $row)
        {
            $user_id = $row->user_id;
            $firstname = $row->firstname;
            $middlename = $row->middlename;
            $lastname = $row->lastname;
            $user_type = $row->user_type;
        }

        $listofmovies = $this->users_model->fetch_data_function('table_movies', 'movie_id');
        $listofrenters = $this->users_model->fetch_data_function('table_borrowers', 'borrow_id');
        $query = $this->db->get_where('table_user', [ 'username' => $this->input->post('username') ] );



        $data =
        [
            'user_data' => $query,
            'movie_list' => $listofmovies,
            'rent_list' => $listofrenters,
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'user_id' => $user_id,
            'firstname' => $firstname, 
            'middlename' => $middlename,
            'lastname' => $lastname,
            'is_logged_in' => TRUE 
        ];



        if($result && $user_type == 1)
        {

            $asd = $this->users_model->fetch_data_function('table_movies', 'movie_id');



            $session_data = $this->session->set_userdata($data);

            $this->load->view('layouts/header', ['title' => 'Home - Admin']);
            $this->load->view('finalpages/AdminMoviePage', $data);
            $this->load->view('layouts/footer');
        }

        elseif ($result && $user_type == 0)
        {
            $this->load->view('layouts/header', ['title' => 'Home']);
            $this->load->view('finalpages/UserHomePage', $data);
            $this->load->view('layouts/footer');
        } 

        }

        else
        {
            $data_error = [ "msg" => "SORRY, NO SUCH USER."];

            $this->load->view('layouts/header', ['title' => 'Home']);
            $this->load->view('finalpages/LoginFormPage', $data_error);
            $this->load->view('layouts/footer');


        }



    }













/*
| -------------------------------------------------------------------
| "LOGOUT PROCESS" -
| Kills/Destroy the session once the logout button is clicked and
| brings you to the login form page.
| -------------------------------------------------------------------
*/
    public function LogoutProcess()
    {
        $data =
        [
            'firstname' => $this->input->post('firstname'),
            'username' => $this->input->post('username'),
            'is_logged_in' => TRUE
        ];

        $this->session->sess_destroy($data);

        redirect('myfunctions/LoginFormPage');

    }




/*
| -------------------------------------------------------------------
| "REGISTER PAGE" -
| Shows the registration page.
| -------------------------------------------------------------------
*/
    public function RegisterPage()
    {

        $this->load->view('layouts/header', ['title' => 'SIGN-UP HERE']);
		$this->load->view('finalpages/RegisterPage');
        $this->load->view('layouts/footer');

    }


/*
| -------------------------------------------------------------------
| "REGISTRATION PROCESS" -
| This function will work if the form in the Register page was submitted.
| It will check if one of the form is empty then it will not proceed to the
| insert function.
| -------------------------------------------------------------------
*/
    public function RegistrationProcess()
    {

        $username = $this->input->post('username');


        $data =
        [

            'firstname' => $this->input->post('firstname'),
            'middlename' => $this->input->post('middlename'),
            'lastname' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'contact_no' => $this->input->post('contact_no'),
            'address' => $this->input->post('address'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))

        ];

        $rtpassword = md5($this->input->post('rtpassword'));

        if(md5($this->input->post('password')) != $rtpassword)
        {

            $msg = ['msg' => 'Sorry Password did not match.'];
            $this->load->view('layouts/header', ['title' => 'Registration Form']);
            $this->load->view('finalpages/RegisterPage', $msg);
            $this->load->view('layouts/footer');

        }

        elseif($this->input->post('firstname') == "")
        {   
            $msg = ['msg' => 'Sorry Firstname is empty.'];
            $this->load->view('layouts/header', ['title' => 'Registration Form']);
            $this->load->view('finalpages/RegisterPage', $msg);
            $this->load->view('layouts/footer');
           
        }
        elseif ($this->input->post('middlename') == "")
        {
            $msg = ['msg' => 'Sorry Middlename is empty.'];
            $this->load->view('layouts/header', ['title' => 'Registration Form']);
            $this->load->view('finalpages/RegisterPage', $msg);
            $this->load->view('layouts/footer');
        }
        elseif ($this->input->post('lastname') == "")
        {
            $msg = ['msg' => 'Sorry Lastname is empty.'];
            $this->load->view('layouts/header', ['title' => 'Registration Form']);
            $this->load->view('finalpages/RegisterPage', $msg);
            $this->load->view('layouts/footer');
        }
        elseif ($this->input->post('email') == "")
        {
            $msg = ['msg' => 'Sorry Email is empty.'];
            $this->load->view('layouts/header', ['title' => 'Registration Form']);
            $this->load->view('finalpages/RegisterPage', $msg);
            $this->load->view('layouts/footer');
        }
        elseif ($this->input->post('contact_no') == "")
        {
            $msg = ['msg' => 'Sorry Contact Number is empty.'];
            $this->load->view('layouts/header', ['title' => 'Registration Form']);
            $this->load->view('finalpages/RegisterPage', $msg);
            $this->load->view('layouts/footer');        }
        elseif ($this->input->post('address') == "")
        {
            $msg = ['msg' => 'Sorry Address is empty.'];
            $this->load->view('layouts/header', ['title' => 'Registration Form']);
            $this->load->view('finalpages/RegisterPage', $msg);
            $this->load->view('layouts/footer');
        }
        elseif ($this->input->post('username') == "")
        {
            $msg = ['msg' => 'Sorry Username is empty.'];
            $this->load->view('layouts/header', ['title' => 'Registration Form']);
            $this->load->view('finalpages/RegisterPage', $msg);
            $this->load->view('layouts/footer');
        }
        elseif ($this->input->post('password') == "")
        {
            $msg = ['msg' => 'Sorry Password is empty.'];
            $this->load->view('layouts/header', ['title' => 'Registration Form']);
            $this->load->view('finalpages/RegisterPage', $msg);
            $this->load->view('layouts/footer');        }

        else
        {

            $this->users_model->create_data_function('table_user', $data, 'showusers');

            $msg = ['msg' => 'Registration was Successful.'];
            $this->load->view('layouts/header', ['title' => 'Registration Form']);
            $this->load->view('finalpages/RegisterPage', $msg);
            $this->load->view('layouts/footer');

        }
    }





























/*
| -------------------------------------------------------------------
| "RETURN DVD PROCESS" -
| This function will work if the user clicked the return DVD button in the
| Return DVD Process, once clicked it will update the table TABLE_BORROWERS
| column DVD_STATUS to RETURNED. 
| -------------------------------------------------------------------
*/
        public function UserReturnDVDProcess($borrow_id, $user_id, $movie_id)
    {



        $user_data_list = $this->db->get_where('table_borrowers', ['borrow_id' => $borrow_id]);


  
        $movie_list = $this->db->get_where('table_movies', ['movie_id' => $movie_id]);


        $this->users_model->return_dvd_function2
        ('table_movies', 'table_borrowers', 'movie_id', $movie_id, $borrow_id, $user_id, 'dvd_status', 'payment_status');


        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));
        $this->db->order_by('borrow_id', 'DESC');
        $all_user_transaction_list = $this->db->get('table_borrowers');

            $data = [ "user_data" => $user_list,
                      "record" => $all_user_transaction_list ];

        $this->load->view( 'layouts/header', [ 'title' => 'MOVIE LIST' ] );
        $this->load->view( 'finalpages/AdminTransactionPage', $data );
        $this->load->view( 'layouts/footer' );
    }



    public function UserReturnPending($user_id, $borrow_id)
    {

        $this->users_model->return_dvd_function
        ('table_borrowers', 'dvd_status', $borrow_id);


        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));
        $dvd_transaction = $this->users_model->fetch_data_function_where
        ('table_borrowers', 'borrow_id', "user_id = $user_id && dvd_status != 'RETURNED'" );

            $data = [ "user_data" => $user_list,
                      "record" => $dvd_transaction ];

        $this->load->view('layouts/header', ['title' => 'Home']);
        $this->load->view('finalpages/UserTransactionPage', $data);
        $this->load->view('layouts/footer');

    }

/*
| -------------------------------------------------------------------
| "RETURN DVD MODEL" -
| This function will work if the return DVD button in Rent DVD Process
| is clicked, it will go to the users_models.php bringing the listed
| parameters that will be used in processing the return DVD and after
| the model finish the work, it will lead you to the user home page.
| -------------------------------------------------------------------
*/
    public function ReturnDVDModel($movie_id, $borrow_id, $user_id)
    {
        $return =
        [

            'user_id' => $user_id,
            'firstname' => $this->input->post('firstname'),
            'middlename' => $this->input->post('middlename'),
            'lastname' => $this->input->post('lastname'),
            'movie_title' => $this->input->post('movie_title'),
            'movie_category' => $this->input->post('movie_category'),
            'no_copies' => $this->input->post('no_copies')

        ];



        $this->users_model->return_dvd_function
        ('table_movies', 'table_borrowers', 'movie_id', $movie_id, $borrow_id, $return, $user_id, 'no_copies', 'dvd_status', 'payment_status');

        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));
        $dvd_transaction = $this->users_model->fetch_data_function_where
('table_borrowers', 'borrow_id', "user_id = $user_id && dvd_status != 'RETURNED'" );
        $data =
        [
           "record" => $dvd_transaction,
           "user_data" => $user_list,
           "msg" => "Your request is pending."

        ];

        $this->load->view( 'layouts/header', [ 'title' => 'MOVIE LIST' ] );
        $this->load->view( 'finalpages/UserTransactionPage', $data );
        $this->load->view( 'layouts/footer' );



    }



/*
| -------------------------------------------------------------------
| "RENT DVD MODEL" - 
| This function will work if the rent DVD button in Holder DVD is clicked.
| The data is divided into 2 groups one is for the table_borrowers and the
| other is for the table_payments. it will go to the users_model.php
| bringing the listed parameters that will be used in processing the rented
| DVD and after the model finish the work, it will lead you to the user home page.
| -------------------------------------------------------------------
*/

    public function RentDVDModel($movie_id, $user_id)
    {

        date_default_timezone_set('Asia/Manila');       
        $month = date('M');
        $year = date('Y');

        $for_table_borrowers =
        [

            'user_id' => $user_id,
            'movie_id' => $movie_id,
            'firstname' => $this->input->post('firstname'),
            'middlename' => $this->input->post('middlename'),
            'lastname' => $this->input->post('lastname'),
            'movie_title' => $this->input->post('movie_title'),
            'movie_category' => $this->input->post('movie_category'),
            'no_copies' => $this->input->post('no_copies'),
            'date_rented' => $this->input->post('date_rented'),
            'date_will_return' => $this->input->post('date_will_return'),
            'dvd_status' => 'CURRENTLY RENTED',
            'month_rented' => $month,
            'year_rented' =>  $year

        ];



        if($this->input->post('payment') === $this->input->post('to_pay'))
        {

        $for_table_payment =
        [

            'user_id' => $user_id,
            'firstname' => $this->input->post('firstname'),
            'middlename' => $this->input->post('middlename'),
            'lastname' => $this->input->post('lastname'),
            'payment' => $this->input->post('payment'),
            'penalty' => $this->input->post('penalty'),
            'total_payment' => $this->input->post('payment') + $this->input->post('penalty'),
            'payment_status' => "PAID"

        ];

        $this->users_model->borrow_dvd_function
        ('table_movies', 'table_borrowers', 'table_payment', 'movie_id', $movie_id, $for_table_borrowers, $for_table_payment, 'no_copies');

        $user_list = $this->db->get_where('table_user', array('user_id' => $user_id));
        $movie_list = $this->users_model->fetch_data_function('table_movies', 'movie_id');

        $data =
        [
           "movie_list" => $movie_list,
           "user_data" => $user_list

        ];

        $this->load->view( 'layouts/header', [ 'title' => 'MOVIE LIST' ] );
        $this->load->view( 'finalpages/UserHomePage', $data );
        $this->load->view( 'layouts/footer' );

        }

        else
        {

        $user_list = $this->db->get_where('table_user', ['user_id' => $user_id]);

        $movie_list = $this->db->get_where('table_movies', ['movie_id' => $movie_id]);

        $holder =
        [

            'msg' => "Sorry you have insufficient money to purchase this DVD.",
            'movie_data' => $movie_list,
            'user_data' => $user_list,
            'user_id' => $this->input->post('user_id'),
            'firstname' => $this->input->post('firstname'),
            'middlename' => $this->input->post('middlename'),
            'lastname' => $this->input->post('lastname'),
            'movie_title' => $this->input->post('movie_title'),
            'movie_category' => $this->input->post('movie_category'),
            'no_copies' => $this->input->post('no_copies')

        ];

        $this->load->view( 'layouts/header', [ 'title' => 'MOVIE LIST' ] );
        $this->load->view( 'finalpages/UserHolderDVD', $holder );
        $this->load->view( 'layouts/footer' );

        }


    }



/*
| -------------------------------------------------------------------
| " EDIT DVD MODEL" - 
| This function will work if the edit movie in ADMIN EDIT MOVIE PAGE is clicked.
| it will change the old data to new data, depends on the administrator what data he/she 
| change.
| -------------------------------------------------------------------
*/

    public function EditDVDModel($movie_id, $user_id)
    {

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100000';
        $config['max_width']  = '100000';
        $config['max_height']  = '100000';
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);


        if ( !$this->upload->do_upload())
        {
            echo "error";

        }
        else
        {

            $data =
            [

            'userfile' => $_FILES['userfile']['name'],
            'movie_title' => $this->input->post('movie_title'),
            'movie_category' => $this->input->post('movie_category'),
            'language' => $this->input->post('language'),
            'rating' => $this->input->post('rating'),
            'release_year' => $this->input->post('release_year'),
            'no_copies' => $this->input->post('no_copies'),
            'movie_description' => $this->input->post('movie_description')

            ];

            $this->users_model->update_data_function('table_movies', $data, 'movie_id', $movie_id);

        }

     $data2 =
     [
        "movie_data" => $this->db->get_where('table_movies', ['movie_id' => $movie_id]),
        "user_data" => $this->db->get_where('table_user', array('user_id' => $user_id)),
        "msg" => 'Movie Sucessfully Edited.'

        ];

        $this->load->view('layouts/header', ['title' => 'Edit Movies']);

        $this->load->view('finalpages/AdminEditMoviePage', $data2);

        $this->load->view('layouts/footer');


    }








    public function delete_movies($id)
    {

        $delete_movie = $this->users_model->delete_data_function('table_movies', 'movie_id', $id, 'showmovies');

    }





    public function delete_borrowed_movies($id)
    {

        $delete_movie = $this->users_model->delete_data_function('table_borrowers', 'borrow_id', $id);

    }


}



