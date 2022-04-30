
<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-witdh, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="template/css/style.css?v=<?php echo time(); ?>" />
    <link type="text/css" rel="stylesheet" href="template/css/font-awesome.min.css?v=<?php echo time(); ?>" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;700&display=swap" rel="stylesheet">
    <style>
        .edit{
            position: absolute;
            top: 200px;
            left: 550px;   
        }
        .edit .form-group .right{
            font-size: 25px;
        }
        .edit .form-group input{
            
            display: inline-block;
            left: 250px;
            top: 0px;
            padding: 8px 12px;
            border: 2px solid #bbb;
            width: 250%;
        }
    </style>

</head>

<body>
    <section id="sidebar">
        <div class="sidebar-brand">
            <h2><i class="fa fa-desktop"></i> <span>Websblog</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li><a href="#"><i class="fa fa-desktop"></i> <span>Dashboard</span></a></li>
                <li><a href="#"><i class="fa fa-users"></i> <span>Customers</span></a></li>
                <li><a href="#"><i class="fa fa-file"></i> <span>Projects</span></a></li>
                <li><a href="#"><i class="fa fa-file-pdf-o"></i> <span>Orders</span></a></li>
                <li><a href="#"><i class="fa fa-money"></i> <span>Income</span></a></li>
                <li><a href="#"><i class="fa fa-user"></i> <span>Account</span></a></li>
                <li><a href="#"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
            </ul>
        </div>
    </section>

    <Section id="main-content">
        <header>
            <div class="header-left">
                <h2 class="toggle-btn">
                    <i class="fa fa-bars"></i> Dashboard
                </h2>
            </div>
            <div class="header-left header-serach">
                <div class="serach-par">
                    <input class="search" type="text" placeholder="Search Here...">
                    <i class="fa fa-search"></i>
                </div>
            </div>
            <div class="header-left header-profile">
                <img src="template/images/user.png" class="img-responsive" />
                <h3>Webs Blog</h3>
                <p>Admin</p>
            </div>
            <div class="clear"></div>
        </header>
        <div class="clear"></div>
        <form action="EditHeroes/add.php" method="POST" id="formSubmit">
            <div class="edit">
                <div class="form-group">
                    <label class="right">Name</label>
                    <div class="left">
                        <input type="text" class="form-control" id="name" name="name" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="right">Attribute</label>
                    <div class="left">
                        <input type="text" class="form-control" id="" name="attribute" value=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="right">Image</label>
                    <div class="left">
                        <input type="text" class="form-control" id="" name="image" value=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="right">Information</label>
                    <div class="left">
                        <input type="text" class="form-control" id="" name="information" value=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="right">Name</label>
                    <div class="left">
                        <input type="submit" value="add" class="submit-btn">
                    </div>
                </div>
            </div>
        </form>
    </Section>
    <div class="clear"></div>

    <script type="text/javascript" src="template/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="template/js/external.js"></script>
</body>
</html>
