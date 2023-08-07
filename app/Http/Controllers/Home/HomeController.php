<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
    {
        $contact = [
            'city' => 'Dhaka',
            'street'=>'main gate, opposite Jamuna Future Park',
            'area'=>'Bashundhara R/A',
            'house'=>'Adept K.R Complex',
            'email'=>'sales@bengalsoftware.com',
            'phone'=>' +8801636408000',
            'website'=>'https://bengalsoftware.com/',
        ];

        $image=[
            'homeimg1'=>'/assets/img/HR.jpeg',
            'homeimg2'=>'/assets/img/emphr.png',
        ];

        $team = [
            [
                'image' => 'assets/img/team/imon.jpeg',
                'member' => 'Imon Faysal',
                'role' => 'Software Engineer',
                'facebook'=>'https://www.facebook.com/faysalahmed.khan.1',
                'linkedin'=>'https://www.linkedin.com/in/imon-faysal-143b82234/',
                'email'=>'emonf666@gmail.com'
            ],
            [
                'image' => 'assets/img/team/sheikhraihan.jpeg',
                'member' => 'Sheikh Raihan Al Saleh',
                'role' => 'Software Engineer',
                'facebook'=>'https://www.facebook.com/sheakhraihan.nabil/',
                'linkedin'=>'https://www.linkedin.com/in/sheikh-raihan-al-saleh-b24330188/',
                'email'=>'sheikhraihanalsaleh22@gmail.com'
            ],
            [
                'image' => 'assets/img/team/hasan.png',
                'member' => 'Kazi Mahamud Hasan',
                'role' => 'Software Engineer',
                'facebook'=>'https://www.facebook.com/raihan.mahmud.16121',
                'linkedin'=>'https://www.linkedin.com/in/kazi-mahamud-9609a8257/',
                'email'=>'raihanmahmud10112@gmail.com'
            ],
            [
                'image' => 'assets/img/team/faijul.jpg',
                'member' => 'Faijul Abedin',
                'role' => 'Software Engineer',
                'facebook'=>'https://www.facebook.com/faijul.abedin.9',
                'linkedin'=>'https://www.linkedin.com/in/faijul-abedin/',
                'email'=>'faijulabedin7@gmail.com'
            ],
        ];

        $slider=[

            [
                'id'=>'1',
                'image'=>'assets/img/screen/1.png',
            ],
            [
                'id'=>'2',
                'image'=>'assets/img/screen/2.png',
            ],
            [
                'id'=>'3',
                'image'=>'assets/img/screen/3.png',
            ],
            [
                'id'=>'4',
                'image'=>'assets/img/screen/4.png',
            ],
            
                
        ];

        $features=[

            [
                'id'=>'1',
                'image'=>'assets/img/svg/paint-palette.svg',
                'name'=>'Creative Design',
                'feature'=>'Incorporate innovative and visually appealing creative design elements that enhance the user experience and aesthetics of the software interface.'
            ],
            [
                'id'=>'2',
                'image'=>'https://cdn.iconscout.com/icon/premium/png-256-thumb/employee-management-2789097-2311460.png?f=webp',
                'name'=>'Efficient Employee Management',
                'feature'=>'Efficiently centralize and manage employee information, from personal details to performance records, in a secure database.'
            ],
            [
                'id'=>'3',
                'image'=>'https://cdn-icons-png.flaticon.com/512/2920/2920360.png',
                'name'=>'User-friendly Interface',
                'feature'=>'Automate payroll calculations and ensure accurate, timely salary payments while minimizing errors.'
            ],
            [
                'id'=>'4',
                'image'=>'https://cdn.iconscout.com/icon/free/png-256/free-payroll-24-1133830.png?f=webp',
                'name'=>'Streamlined Payroll Processing',
                'feature'=>'Monitor real-time attendance, leaves, and time-off requests for informed decision-making.'
            ],
            [
                'id'=>'5',
                'image'=>'https://cdn.iconscout.com/icon/premium/png-256-thumb/employee-attendance-management-system-2245408-1872868.png?f=webp',
                'name'=>'Real-time Time and Attendance Tracking',
                'feature'=>'Streamline leave management with online applications, approvals, and balance tracking.'
            ],
            [
                'id'=>'6',
                'image'=>'https://icons.veryicon.com/png/o/miscellaneous/facet-icon-6/leave-management-1.png',
                'name'=>'Seamless Leave Management',
                'feature'=>'Gain valuable insights into workforce trends, productivity, and performance through detailed reports and analytics.'
            ],
            [
                'id'=>'7',
                'image'=>'https://icon-library.com/images/analytics-icon-png/analytics-icon-png-18.jpg',
                'name'=>'Insightful Reports and Analytics',
                'feature'=>'Ensure data security with robust measures and role-based access control in our HR Payroll software.'
            ],
            [
                'id'=>'8',
                'image'=>'https://icons.veryicon.com/png/o/miscellaneous/52-simple-and-colorful-icon/security-84.png',
                'name'=>'Enhanced Security and Access Control',
                'feature'=>'Navigate and utilize the software`s full potential easily with an intuitive and user-friendly interface for HR teams and employees.'
            ],
           
            
                
        ];
        
        
        return view('home.homepage',compact('contact','image','team','slider','features'));
    }
    
}
