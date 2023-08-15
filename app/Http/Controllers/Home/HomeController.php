<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
    {

        $software=[
           
            'softwaretitle'=>'Bengal Finance',
            'subtitle'=>'Empower Your Financial Operations with the Finance Management System. Streamline, Secure, and Succeed in Managing Your Business Finances',
        ];

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
            'homeimg1'=>'assets/img/acc/21.jpeg',
            'homeimg2'=>'',
        ];

        // $team = [
        //     [
        //         'image' => 'assets/img/team/imon.jpeg',
        //         'member' => 'Imon Faysal',
        //         'role' => 'Software Engineer',
        //         'facebook'=>'https://www.facebook.com/faysalahmed.khan.1',
        //         'linkedin'=>'https://www.linkedin.com/in/imon-faysal-143b82234/',
        //         'email'=>'emonf666@gmail.com'
        //     ],
        //     [
        //         'image' => 'assets/img/team/sheikhraihan.jpeg',
        //         'member' => 'Sheikh Raihan Al Saleh',
        //         'role' => 'Software Engineer',
        //         'facebook'=>'https://www.facebook.com/sheakhraihan.nabil/',
        //         'linkedin'=>'https://www.linkedin.com/in/sheikh-raihan-al-saleh-b24330188/',
        //         'email'=>'sheikhraihanalsaleh22@gmail.com'
        //     ],
        //     [
        //         'image' => 'assets/img/team/hasan.png',
        //         'member' => 'Kazi Mahamud Hasan',
        //         'role' => 'Software Engineer',
        //         'facebook'=>'https://www.facebook.com/raihan.mahmud.16121',
        //         'linkedin'=>'https://www.linkedin.com/in/kazi-mahamud-9609a8257/',
        //         'email'=>'raihanmahmud10112@gmail.com'
        //     ],
        //     [
        //         'image' => 'assets/img/team/faijul.jpg',
        //         'member' => 'Faijul Abedin',
        //         'role' => 'Software Engineer',
        //         'facebook'=>'https://www.facebook.com/faijul.abedin.9',
        //         'linkedin'=>'https://www.linkedin.com/in/faijul-abedin/',
        //         'email'=>'faijulabedin7@gmail.com'
        //     ],
        // ];

        $slider=[
            
            [
                'id'=>'1',
                'image'=>'assets/img/acc/21.jpeg',
            ],
            [
                'id'=>'2',
                'image'=>'assets/img/acc/2.jpeg',
            ],
            [
                'id'=>'3',
                'image'=>'assets/img/acc/3.jpeg',
            ],
            [
                'id'=>'4',
                'image'=>'assets/img/acc/4.jpeg',
            ],
            [
                'id'=>'5',
                'image'=>'assets/img/acc/5.jpeg',
            ],
            [
                'id'=>'6',
                'image'=>'assets/img/acc/6.jpeg',
            ],
            [
                'id'=>'7',
                'image'=>'assets/img/acc/7.jpeg',
            ],
            [
                'id'=>'8',
                'image'=>'assets/img/acc/8.jpeg',
            ],
            [
                'id'=>'9',
                'image'=>'assets/img/acc/9.jpeg',
            ],
            [
                'id'=>'10',
                'image'=>'assets/img/acc/10.jpeg',
            ],
            [
                'id'=>'11',
                'image'=>'assets/img/acc/11.jpeg',
            ],
            [
                'id'=>'12',
                'image'=>'assets/img/acc/12.jpeg',
            ],
            [
                'id'=>'13',
                'image'=>'assets/img/acc/13.jpeg',
            ],
            [
                'id'=>'14',
                'image'=>'assets/img/acc/14.jpeg',
            ],
            [
                'id'=>'15',
                'image'=>'assets/img/acc/15.jpeg',
            ],
            [
                'id'=>'16',
                'image'=>'assets/img/acc/16.jpeg',
            ],
            [
                'id'=>'17',
                'image'=>'assets/img/acc/17.jpeg',
            ],
            [
                'id'=>'18',
                'image'=>'assets/img/acc/18.jpeg',
            ],
            [
                'id'=>'19',
                'image'=>'assets/img/acc/19.jpeg',
            ],
            [
                'id'=>'20',
                'image'=>'assets/img/acc/20.jpeg',
            ],
            [
                'id'=>'21',
                'image'=>'assets/img/acc/1.jpeg',
            ],
            
                
        ];

        $features=[

            [
                'id'=>'1',
                'image'=>'https://cdn.iconscout.com/icon/premium/png-256-thumb/user-management-2410699-2024637.png',
                'name'=>'User Management',
                'feature'=>'Efficiently create, modify, and delete user accounts. Assign roles and permissions for controlled access.'
            ],
            [
                'id'=>'2',
                'image'=>'https://cdn.iconscout.com/icon/premium/png-256-thumb/employee-management-2789097-2311460.png?f=webp',
                'name'=>'Role Access Management',
                'feature'=>'Implement role-based access control to ensure data security and limit unauthorized access.'
            ],
            [
                'id'=>'3',
                'image'=>'https://img.icons8.com/color/12x/add-contact-to-company.png',
                'name'=>'Contact Management',
                'feature'=>'Easily manage and retrieve contact information for communication and record-keeping.'
            ],
            [
                'id'=>'4',
                'image'=>'https://cdn0.iconfinder.com/data/icons/business-finance-vol-1-59/512/cash_book_ledger_accounting-512.png',
                'name'=>'Cashbook Maintenance',
                'feature'=>'Keep track of cash inflows and outflows with a digital cashbook for effective financial monitoring.'
            ],
            [
                'id'=>'5',
                'image'=>'https://cdn-icons-png.flaticon.com/512/7656/7656399.png',
                'name'=>'Product and Stock',
                'feature'=>'Input and view product details along with stock quantities for streamlined inventory management.'
            ],
            [
                'id'=>'6',
                'image'=>'https://icon-library.com/images/sell-icon/sell-icon-12.jpg',
                'name'=>'Purchase Management',
                'feature'=>'Record, track, and manage purchase transactions, returns, and pending payments.'
            ],
            [
                'id'=>'7',
                'image'=>'https://cdn.iconscout.com/icon/free/png-256/free-sales-analysis-report-progress-dollar-finance-analytics-1-9602.png',
                'name'=>'Sales Management',
                'feature'=>'Efficiently record sales transactions, manage returns, and monitor pending payments.'
            ],
            [
                'id'=>'8',
                'image'=>'https://cdn.iconscout.com/icon/free/png-256/free-emi-calculator-1817339-1538208.png?f=webp',
                'name'=>'EMI Transactions',
                'feature'=>'Facilitate EMI sales of products and effectively manage EMI collections.'
            ],
           
            [
                'id'=>'9',
                'image'=>'https://cdn-icons-png.flaticon.com/512/2892/2892763.png',
                'name'=>'Reports Generation',
                'feature'=>'Generate insightful reports summarizing purchases and EMI sales for informed decision-making.'
            ],
            [
                'id'=>'10',
                'image'=>'https://cdn-icons-png.flaticon.com/512/8090/8090406.png',
                'name'=>'User Profile Management:',
                'feature'=>'Allow users to view and update their profiles for accurate information.'
            ],
            [
                'id'=>'11',
                'image'=>'https://icons-for-free.com/iconfiles/png/512/cog+customize+gear+preferences+settings+icon-1320196713018521005.png',
                'name'=>'Settings Customization:',
                'feature'=>'Configure general and system-specific settings to align with business requirements.'
            ],
            [
                'id'=>'12',
                'image'=>'https://cdn-icons-png.flaticon.com/512/2345/2345454.png',
                'name'=>'Security and Performance ',
                'feature'=>'Robust authentication and data encryption ensure data security and prevent unauthorized access. Handle concurrent users and data entries efficiently, minimizing delays. '
            ],
           
            
                
        ];


        $about=[
            'image'=>'https://www.pngmart.com/files/About-Us-Download-PNG-Image.png',
            'image2'=>'assets/img/aboutimage.png',
            'title'=>'Elevate Your Financial Management System with Bengal Software',
            'describtion'=>'Welcome to our platform! We`re here to introduce you to our advanced Financial Management System. Our goal is simple: to provide businesses with an efficient solution for managing finances, combining ease, accuracy, and growth opportunities.'        
        ];
        $aboutcontent=[
            [
                'title'=>'Why Choose Us?',
                'describtion'=>''
            ],
            
            [
                'title'=>'Expertise and Experience',
                'describtion'=>'With years of experience, we understand the intricacies of financial processes, ensuring our software meets your needs.'
            ],
            
            [
                'title'=>'Comprehensive Features',
                'describtion'=>'Our system offers user-friendly interfaces, insightful reporting, and adaptable features.'
            ],
            
            [
                'title'=>'Security at Core',
                'describtion'=>'We prioritize your data security. Our software employs advanced encryption and strict access controls, safeguarding your financial information from unauthorized access and potential threats.'
            ],
            [
                'title'=>'Ease of Use',
                'describtion'=>'Our intuitive interface simplifies navigating complex financial data, boosting efficiency.'
            ],
            [
                'title'=>'Support',
                'describtion'=>'Our dedicated team is committed to assisting you at every stage, ensuring you make the most of our software.'
            ],
            
            
         
            
        ];
        
        return view('home.homepage',compact('contact','image','slider','software','features','about','aboutcontent'));
    }
    
}
