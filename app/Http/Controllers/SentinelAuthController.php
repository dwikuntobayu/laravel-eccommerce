<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SentinelAuthController extends Controller
{
  /*
   * show signup form
   * for create new user
   */
  public function get_signup()
  {
    
  }
  
  /*
   * submit signup form 
   * for process register new user
   */
  public function post_signup(Request $request)
  {
    
  }
  
  /*
   * show login form
   * for create user session
   */
  public function get_login()
  {
    
  }
  
  /*
   * submit login form
   * for check if user exist
   */
  public function post_login(Request $request)
  {
    
  }
  
  /*
   * destroy user session
   */
  public function logout(Request $request)
  {
    
  }
  
  /*
   * show reset password form
   */
  public function get_reset_password()
  {
    
  }
  
  /*
   * submit reset password form
   * check if email exist
   */
  public function post_reset_password(Request $request)
  {
    
  }
  
  /*
   * show process reset password form
   */
  public function get_process_password($token_password)
  {
    
  }
  
  /*
   * submit process reset password form
   * for update a user password
   */
  public function put_process_password(Request $request, $token_password)
  {
    
  }
}
