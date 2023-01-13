<?php

namespace App\Main;

class SideMenu
{
    /**
     * List of side menu items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function menu()
    {
        return [ 'crud' => [
            'icon' => 'edit',
            'title' => 'TOKEN DETAILS',
            'sub_menu' => [
                'crud_data_list' => [
                    'icon' => '',
                    'route_name' => 'Token-Isuued-list',
                    'params' => [

                        'layout' => 'side-menu'
                    ],
                    'title' => 'Token Issuance Info'
                ],
                // 'crud_data_list-2' => [
                //     'icon' => '',
                //     'route_name' => 'Current-Token-list',
                //     'params' => [
                //         'layout' => 'side-menu'
                //     ],
                //     'title' => 'Current Token Info'
                // ],
                'crud_data_list-3' => [
                    'icon' => '',
                    'route_name' => 'Used-Token-List',
                    'params' => [
                        'layout' => 'side-menu'
                    ],
                    'title' => 'Used Token Info'
                ],

            ]
        ],
        'users' => [
            'icon' => 'users',
            'title' => 'CUSTOMERS',
            'sub_menu' => [
                'Cus-Reg-List' => [
                    'icon' => '',
                    'route_name' => 'Cus-Reg-List',
                    'params' => [
                        'layout' => 'side-menu'
                    ],
                    'title' => 'CUSTOMER INFO'
                ],
                // 'Login_Media' => [
                //     'icon' => '',
                //     'route_name' => 'Login_Media',
                //     'params' => [
                //         'layout' => 'side-menu'
                //     ],
                //     'title' => 'LOGIN MEDIA INFO '
                // ],


            ]
        ],


            'Branches Details' => [
                'icon' => 'layers',
                'route_name' => 'Branch-Info',
                'params' => [
                    'layout' => 'side-menu'
                ],
                'title' => 'BRANCHES INFO'
            ],
            'QR-Genarate' => [
                'icon' => 'QR-code',
                'route_name' => 'QR-Genarate',
                'params' => [
                    'layout' => 'side-menu'
                ],
                'title' => '    GENARATE QR'
            ],


            'devider',



            'pages' => [
                'icon' => 'user',
                'title' => 'ADMIN HANDLING',
                'sub_menu' => [

                    'profile-overview-1' => [
                        'icon' => '',
                        'route_name' => 'profile-overview-1',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'MANAGE ADMIN'
                    ],
                    // 'login' => [
                    //     'icon' => '',
                    //     'route_name' => 'login',
                    //     'params' => [
                    //         'layout' => 'login'
                    //     ],
                    //     'title' => 'Login'
                    // ],
                    'register' => [
                        'icon' => '',
                        'route_name' => 'register',
                        'params' => [
                            'layout' => 'login'
                        ],
                        'title' => 'ADD ACCOUNT '
                    ],
                    // 'welcome' => [
                    //     'icon' => '',
                    //     'route_name' => 'welcome',
                    //     'params' => [
                    //         'layout' => 'side-menu'
                    //     ],
                    //     'title' => 'WelCome'
                    // ],
                    // 'update-profile' => [
                    //     'icon' => '',
                    //     'route_name' => 'update-profile',
                    //     'params' => [
                    //         'layout' => 'side-menu'
                    //     ],
                    //     'title' => 'Update profile'
                    // ],
                    // 'change-password' => [
                    //     'icon' => '',
                    //     'route_name' => 'change-password',
                    //     'params' => [
                    //         'layout' => 'side-menu'
                    //     ],
                    //     'title' => 'Change Password'
                    // ]
                ]
            ],
            'devider',
            'Messages History' => [
                'icon' => 'inbox',
                'title' => 'MESSAGES',
                'sub_menu' => [
                    'chat' => [
                        'icon' => 'bell',
                        'route_name' => 'Notify-History',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'MESSAGE HISTORY'
                    ],

                    'message' => [
                        'icon' => 'message-square',
                        'route_name' => 'inbox',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'MESSAGE CONTENT'
                    ],



                ]
            ],
            'devider',

            'calendar' => [
                'icon' => 'calendar',
                'route_name' => 'calendar',
                'params' => [
                    'layout' => 'side-menu'
                ],
                'title' => 'TEST'


            ],

        ];
    }
}
