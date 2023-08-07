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
            'homeimg1'=>'assets/img/screen/1.png',
            'homeimg2'=>'assets/img/screen/37.png',
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
                'image'=>'assets/img/screen/3.png',
            ],
            [
                'id'=>'3',
                'image'=>'assets/img/screen/5.png',
            ],
            [
                'id'=>'4',
                'image'=>'assets/img/screen/6.png',
            ],
            [
                'id'=>'5',
                'image'=>'assets/img/screen/7.png',
            ],
            [
                'id'=>'6',
                'image'=>'assets/img/screen/8.png',
            ],
            [
                'id'=>'7',
                'image'=>'assets/img/screen/9.png',
            ],
            [
                'id'=>'8',
                'image'=>'assets/img/screen/10.png',
            ],
            [
                'id'=>'9',
                'image'=>'assets/img/screen/11.png',
            ],
            [
                'id'=>'10',
                'image'=>'assets/img/screen/12.png',
            ],
            [
                'id'=>'11',
                'image'=>'assets/img/screen/13.png',
            ],
            [
                'id'=>'12',
                'image'=>'assets/img/screen/14.png',
            ],
            [
                'id'=>'13',
                'image'=>'assets/img/screen/15.png',
            ],
            [
                'id'=>'14',
                'image'=>'assets/img/screen/16.png',
            ],
            [
                'id'=>'15',
                'image'=>'assets/img/screen/17.png',
            ],
            [
                'id'=>'16',
                'image'=>'assets/img/screen/18.png',
            ],
            [
                'id'=>'17',
                'image'=>'assets/img/screen/19.png',
            ],
            [
                'id'=>'18',
                'image'=>'assets/img/screen/20.png',
            ],
            [
                'id'=>'19',
                'image'=>'assets/img/screen/21.png',
            ],
            [
                'id'=>'20',
                'image'=>'assets/img/screen/22.png',
            ],
            [
                'id'=>'21',
                'image'=>'assets/img/screen/24.png',
            ],
            [
                'id'=>'22',
                'image'=>'assets/img/screen/26.png',
            ],
            [
                'id'=>'23',
                'image'=>'assets/img/screen/27.png',
            ],
            [
                'id'=>'24',
                'image'=>'assets/img/screen/28.png',
            ],
            [
                'id'=>'25',
                'image'=>'assets/img/screen/29.png',
            ],
            [
                'id'=>'26',
                'image'=>'assets/img/screen/30.png',
            ],
            [
                'id'=>'27',
                'image'=>'assets/img/screen/31.png',
            ],
            [
                'id'=>'28',
                'image'=>'assets/img/screen/32.png',
            ],
            [
                'id'=>'29',
                'image'=>'assets/img/screen/33.png',
            ],
            [
                'id'=>'30',
                'image'=>'assets/img/screen/34.png',
            ],
            [
                'id'=>'31',
                'image'=>'assets/img/screen/35.png',
            ],
            [
                'id'=>'32',
                'image'=>'assets/img/screen/36.png',
            ],
            [
                'id'=>'33',
                'image'=>'assets/img/screen/37.png',
            ],
            [
                'id'=>'34',
                'image'=>'assets/img/screen/38.png',
            ],
            [
                'id'=>'35',
                'image'=>'assets/img/screen/39.png',
            ],
            [
                'id'=>'36',
                'image'=>'assets/img/screen/40.png',
            ],
            [
                'id'=>'37',
                'image'=>'assets/img/screen/41.png',
            ],
            [
                'id'=>'38',
                'image'=>'assets/img/screen/42.png',
            ],
            [
                'id'=>'39',
                'image'=>'assets/img/screen/43.png',
            ],
            [
                'id'=>'40',
                'image'=>'assets/img/screen/44.png',
            ],
            [
                'id'=>'41',
                'image'=>'assets/img/screen/45.png',
            ],
            [
                'id'=>'42',
                'image'=>'assets/img/screen/46.png',
            ],
            [
                'id'=>'43',
                'image'=>'assets/img/screen/47.jpg',
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


        $about=[
            'title'=>'Elevate Your HR and Payroll Management with Bengal Software',
            'describtion'=>'Welcome to streamlined efficiency and unrivaled accuracy in HR and payroll management. Our all-in-one solution redefines how you handle human resources and payroll tasks, ensuring precision and compliance every step of the way.'        
        ];
        $aboutcontent=[
            [
                'title'=>'Why Choose Us?',
                'describtion'=>'At Bengal Software, we grasp the pivotal role of an organized HR and payroll system. Our software transforms challenges into opportunities, optimizing processes and enhancing employee management while effortlessly adhering to the latest labor laws.'
            ],
            
            [
                'title'=>'Experience Seamless Excellence',
                'describtion'=>'Modern business demands more from HR and payroll management. Our software steps up to the challenge, offering a unified solution adaptable for businesses of any size. Complexities are simplified, allowing you to navigate intricacies with ease and confidence.'
            ],
            
            [
                'title'=>'Simplicity Meets Innovation',
                'describtion'=>'Say goodbye to the complexities of compliance. Our HR Payroll software simplifies the landscape, keeping you informed and compliant with evolving labor laws. It`s more than a tool - it`s your guide to a seamless, efficient, and worry-free operation.'
            ],
            
            [
                'title'=>'Join the Future',
                'describtion'=>'Start your journey with Bengal Software now. Make HR and payroll a breeze, accurate, and problem-free. Your success begins today.'
            ],
            
         
            
        ];
        
        return view('home.homepage',compact('contact','image','team','slider','features','about','aboutcontent'));
    }
    
}
