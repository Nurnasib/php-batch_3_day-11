<?php
namespace App\classes;
class Example
{
    public $student = [];

    public function index()
    {
        $this->student = [
            0 => [
                'name'   => 'Jahed',
                'Email'  => 'jahid@gmail.com',
                'mobile' => [
                    'mobile1' => '346786',
                    'mobile2' => '543875'
                ]
            ],
            1 => [
                'name'   => 'Sreejon',
                'Email'  => 'sree@gmail.com',
                'mobile' => [
                    'mobile1' => '346786',
                    'mobile2' => '543875'
                ]
            ],
            2 => [
                'name'   => 'Fardin',
                'Email'  => 'far@gmail.com',
                'mobile' => [
                    'mobile1' => '346786',
                    'mobile2' => '543875'
                ]
            ],
            3 => 'BITM',
            4 => [
                'name'   => 'Shehon',
                'Email'  => 'shehon@gmail.com',
                'mobile' => [
                    'mobile1' => '346786',
                    'mobile2' => '543875'
                ]
            ]
        ];
        echo '<pre>';
//        print_r($this->student);
        var_dump($this->student);

//        echo $this->student[1]['name'];
      /*  foreach ($this->student as $key => $item)
        {
//            echo $item['name'].' '.$item['Email'].' '.$item['mobile'].'<br/>';
            if (is_array($item))
            {
                foreach ($item as $value)
                {
                   if (is_array($value))
                   {
                       foreach ($value as $v_value)
                       {
                           echo $v_value.' ';
                       }
                   }
                   else
                   {
                       echo $value.' ';
                   }
                }
            }
            else
            {
                echo $item;
            }
            echo '<br/>';
        }*/



       /* $this->student = [10, 20, 'BITM', 10.20, false, true];
//        echo $this->student[5];
        foreach ($this->student as $role => $student)
        {
            echo 'index no'.$role. ' value - ' . $student.'<br/>';
        }*/
    }
}