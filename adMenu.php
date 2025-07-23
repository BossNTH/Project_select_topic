<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">หน้าหลัก</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">พนักงาน</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#'>แผนก</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#'>ประเภทสินค้า</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#'>ประเภทการจ่าย</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#'>ผู้ขาย</a>
                    </li>
                    <li>
                        <div class="dropdown">
                            <button class="btn btn-dark dropdown-toggle" type="button" id="#"
                                data-bs-toggle="dropdown">
                                Dropdown
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fa fa-sign-out"
                                style="font-size:15px;color:white;"></i>ออกจากระบบ</a>
                    </li>
                </ul>
                </ul>
            </div>
        </div>
    </nav>

    <BR></BR>

    <!-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">พนักงาน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">แผนก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ประเภทสินค้า</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ประเภทการจ่าย</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ผู้ขาย</a>
                    </li>
                    <ul class="navbar-nav navbar-right">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-sign-out"
                                    style="font-size:15px;color:white;"></i>ออกจากระบบ</a>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav> -->

    <h2>Choose your major</h2>

    <form action="#" method="post">
        <label for="province">Major : </label>
        <select name="province" id="province">
            <option value="">-- choose major --</option>
            <option value="bangkok">IT</option>
            <option value="chiangmai">CS</option>
            <option value="chonburi">CA</option>
            <option value="phuket">CMD</option>
        </select>
        <br><br>
        <input type="submit" value="ส่งข้อมูล">
    </form>
</body>

</html>