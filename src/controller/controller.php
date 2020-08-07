<?php
#----Manage Urls ----#
#Index page
if($url == ''){
    include('model/index.php');
}
#Sitemap page
elseif($explode_url[0] == 'sitemap.xml'){
    include('model/sitemap.php');
}
elseif ($explode_url[0] == 'blog'){
    if(isset($data)){
        if($data[0] == ''){
            include ('model/blog.php');
        }
        if ($data[0] == 'page'){
            include ('model/blog_page.php');
        }
    }
    else {
        include ('model/blog.php');
    }

}
elseif ($explode_url[0] == 'rooms'){
    if(isset($data)){
        if($data[0] == ''){
            include ('model/room.php');
        }
        if ($data[0] == 'page'){
            include ('model/room_page.php');
        }
    }
    else {
        include ('model/room.php');
    }
}
elseif ($explode_url[0] == 'menu'){
    include ('model/menu.php');
}
elseif ($explode_url[0] == 'contact'){
    include ('model/contact.php');
}
elseif ($explode_url[0] == 'blog-detail'){
    include ('model/blog_detail.php');
}
elseif ($explode_url[0] == 'room-detail'){
    include ('model/room_detail.php');
}
elseif ($explode_url[0] == '404'){
    include('model/404.php');
}
elseif ($explode_url[0] == 'booking-form'){
    include ('model/booking_form.php');
}
elseif ($explode_url[0] == 'book-room'){
    include ('model/book_room.php');
}
###### ADMIN AREA
elseif ($explode_url[0] == 'admin'){
    if (!isset($_SESSION['email'])){
        include ('model/admin/login.php');
    }else{
        ###GET USER ADMIN
        $flag_admin = 0;
        $email = $_SESSION['email'];
        $get_user_admin = "select * from user where email='$email'";
        $run_user_admin = mysqli_query($con, $get_user_admin);
        $row_user_admin = mysqli_fetch_array($run_user_admin);
        $status = $row_user_admin['status'];
        if ($status == 'admin'){
            $flag_admin = 1;
        }
        ###END GETB USER ADMIN
        if ($data[0] == ''){
            include ('model/admin/dashboard.php');
        }
        if ($data[0] == 'room-type'){
            if ($data[1] == ''){
                include ('model/admin/room_type.php');
            }
            if ($data[1] == 'add'){
                include ('model/admin/action/add_room_type.php');
            }
            if ($data[1] == 'edit'){
                include ('model/admin/action/edit_room_type.php');
            }
            if ($data[1] == 'delete'){
                include ('model/admin/action/delete_room_type.php');
            }
            if ($data[1] == 'delete-action'){
                include ('model/admin/action/delete_action_room_type.php');
            }
        }
        if ($data[0] == 'bed'){
            if ($data[1] == ''){
                include ('model/admin/bed.php');
            }
            if ($data[1] == 'add'){
                include ('model/admin/action/add_bed.php');
            }
            if ($data[1] == 'edit'){
                include ('model/admin/action/edit_bed.php');
            }
            if ($data[1] == 'delete'){
                include ('model/admin/action/delete_bed.php');
            }
            if ($data[1] == 'delete-action'){
                include ('model/admin/action/delete_action_bed.php');
            }
        }
        if ($data[0] == 'contact-info'){
            if ($flag_admin == 1){
                include ('model/admin/contact_info.php');
            }else{
                header('Location: '.$base_url.'admin/');
            }
        }
        if ($data[0] == 'user'){
            if ($flag_admin == 1){
                if ($data[1] == ''){
                    include ('model/admin/user/user.php');
                }
                if ($data[1] == 'add'){
                    include ('model/admin/user/add_user.php');
                }
                if ($data[1] == 'edit'){
                    include ('model/admin/user/edit_user.php');
                }
                if ($data[1] == 'delete'){
                    include ('model/admin/user/delete_user.php');
                }
                if ($data[1] == 'delete-action'){
                    include ('model/admin/user/delete_action_user.php');
                }
            }else{
                header('Location: '.$base_url.'admin/');
            }
        }
        if ($data[0] == 'profile'){
            include ('model/admin/profile.php');
        }
        if ($data[0] == 'user-contact'){
            if ($data[1] == ''){
                include ('model/admin/contact/user_contact.php');
            }
            if ($data[1] == 'page'){
                include ('model/admin/contact/user_contact_page.php');
            }
            if ($data[1] == 'replay'){
                include ('model/admin/contact/user_contact_replay.php');
            }
        }
        if ($data[0] == 'menu'){
            if (isset($data[1])){
                if ($data[1] == ''){
                    include ('model/admin/menu/menu.php');
                }
                if ($data[1] == 'add'){
                    include ('model/admin/menu/menu_add.php');
                }
                if ($data[1] == 'edit'){
                    include ('model/admin/menu/edit_menu.php');
                }
                if ($data[1] == 'delete'){
                    include ('model/admin/menu/delete_menu.php');
                }
                if ($data[1] == 'delete-action'){
                    include ('model/admin/menu/delete_action_menu.php');
                }
            }else{
                include ('model/admin/menu/menu.php');
            }
        }
        if ($data[0] == 'book'){
            if (isset($data[1])){
                if ($data[1] == ''){
                    include ('model/admin/book/book.php');
                }
                if ($data[1] == 'page'){
                    include ('model/admin/book/book_page.php');
                }
                if ($data[1] == 'change'){
                    include ('model/admin/book/book_change.php');
                }
            }else{
                include ('model/admin/book/book.php');
            }
        }
        if ($data[0] == 'room'){
            if (isset($data[1])){
                if ($data[1] == ''){
                    include ('model/admin/room/room.php');
                }
                if ($data[1] == 'page'){
                    include ('model/admin/room/room_page.php');
                }
                if ($data[1] == 'add'){
                    include ('model/admin/room/room_add.php');
                }
                if ($data[1] == 'edit'){
                    include ('model/admin/room/room_edit.php');
                }
                if ($data[1] == 'delete'){
                    include ('model/admin/room/room_delete.php');
                }
                if ($data[1] == 'delete-action'){
                    include ('model/admin/room/room_delete_action.php');
                }
            }else{
                include ('model/admin/room/room.php');
            }
        }
        if ($data[0] == 'blog'){
            if (isset($data[1])){
                if ($data[1] == ''){
                    include ('model/admin/blog/blog.php');
                }
                if ($data[1] == 'page'){
                    include ('model/admin/blog/blog_page.php');
                }
                if ($data[1] == 'add'){
                    include ('model/admin/blog/blog_add.php');
                }
                if ($data[1] == 'edit'){
                    include ('model/admin/blog/blog_edit.php');
                }
                if ($data[1] == 'delete'){
                    include ('model/admin/blog/blog_delete.php');
                }
                if ($data[1] == 'delete-action'){
                    include ('model/admin/blog/blog_delete_action.php');
                }
            }else{
                include ('model/admin/blog/blog.php');
            }
        }
    }
}
#404 page
else{
    include('model/404.php');
}
?>