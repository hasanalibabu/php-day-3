<?php


namespace App\classes;


class Example
{
    public $student = [];

    public function index()
    {

        $this->student = [
            0 => [
                'name' => 'hasan',
                'email' => 'hasan@gmail.com',
                'mobile' => [
                    'mobil' => '171442622',
                    'mobil' => '171441111',
                ],
            ],
            1 => [
                'name' => 'tonmoy',
                'email' => 'tonmoy@gmail.com',
                'mobile' => [
                    'mobil' => '171442333',
                    'mobil' => '171442444',
                ],
            ],
            2 => 'BITM',
            3 => [
                'name' => 'riaj',
                'email' => 'riaj@gmail.com',
                'mobile' => [
                    'mobil' => '171442655',
                    'mobil' => '171442666',
                ],
            ]
        ];

        echo '<pre>';
//        print_r($this->student);
//        var_dump($this->student);

//        foreach ($this->student as $key => $item)
//        {
//            if (is_array($item))
//            {
//                foreach ($item as $value)
//                {
//                    if (is_array($value))
//                    {
//                        foreach ($value as $v_value)
//                        {
//                            echo $v_value;
//                        }
//                    }
//                    else
//                    {
//                        echo $value . ' ';
//                    }
//                }
//            }
//            else
//            {
//                echo $item;
//            }
//            echo '<br/>';
//        }
//    }
//        if ($key==0)
//        {
//        echo $item['name'].' '.$item['email'].$item['mobile']. '<br/>';
//        }

//        $this->student = [10, 20, 'BITM', 10.20, true, false];
////        echo  $this->student[1];
//
//        foreach ($this->student as $role => $student)
//        {
//            echo 'index no - '. $role. ' value - '. $student. '<br/>';
//        }

    }
}
