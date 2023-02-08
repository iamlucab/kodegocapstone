<?php
  
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\User;
use Hash;
  
class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('auth.login');
    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('auth.registration');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
            ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
        
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }


 public function retrieveAllUsers()
{
 $results = DB::select('SELECT * FROM users');
return view('all-users')->with('users', $results);
}

public function editUser(int $member)
{
$u = DB::select("SELECT * FROM users WHERE id = ?", [$member]);
return view('edit-user-form')->with('u', $u[0]);
}


public function updateUser(Request $request)
{
$id = $request->input('id');
$username = $request->input('username');
$name = $request->input('name');
$lastname = $request->input('lastname');
$email = $request->input('email');
$mobile= $request->input('mobile');
$password = $request->input('password');
$address = $request->input('address');
$bday = $request->input('bday');
DB::update("UPDATE users SET username = ?, name = ?, lastname= ?,  email = ?, mobile = ?,  address = ?, bday = ? WHERE id = ?", [$username, $name, $lastname, $email, $mobile, $address, $bday, $id]);
return redirect()->route('profile');


}




}

