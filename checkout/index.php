<?php
$therapist = $_GET['therapist'];
$name = $_GET['name'];
$phone = $_GET['phone'];
$email = $_GET['email'];
$appointmentDate = $_GET['appointmentDate'];
$appointmentTime = $_GET['appointmentTime'];
$description = $_GET['description'];
$price = $_GET['price'];
$status = $_GET['status'];
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png"
        href="https://www.creativefabrica.com/wp-content/uploads/2020/09/03/Medical-logo-design-Graphics-5262814-1-1-580x387.jpg" />
    <title>صورتحساب | پلتفرم مشاوره آنلاین سلامت روان</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@100..900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Vazirmatn", sans-serif;
        }
    </style>
</head>

<body>
    <div class="bg-danger text-center pt-3 pb-1">
    <p class="text-white">این سایت برای پروژه دانشگاهی پیاده‌سازی شده و فعال نمی‌باشد. </p>
</div>
    <header class="bg-white text-white text-center py-3">
        <a href="#"><img class="default_logo"
                src="https://www.creativefabrica.com/wp-content/uploads/2020/09/03/Medical-logo-design-Graphics-5262814-1-1-580x387.jpg"
                alt="logo" style="height:60px;"></a>
    </header>
    <hr class="my-auto">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../">خانه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../therapists/">درمانگران</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../terms/">قوانین</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../support/">پشتیبانی</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../blog/">بلاگ</a>
                    </li>
                </ul>
                <form>
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        ورود
                    </button>
                    <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModals">
                        ثبت‌نام
                    </button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <hr class="my-auto">
    <div class="container my-5 text-center">
        <h3 class="text-center pb-1">صورتحساب</h3>
        <span class="text-secondary mb-5">اطلاعات رزرو خودتون بررسی کنید</span>
    </div>
    <div class="container my-5">
     <div class="row">
    <form action="save.php" method="post">
      <div class="border rounded-3 p-3">
        <p><strong>درمانگر:</strong> <span id="therapist"></span></p><hr>
        <p><strong>نام و نام خانوادگی:</strong> <span id="name"></span></p><hr>
        <p><strong>شماره تماس:</strong> <span id="phone"></span></p><hr>
        <p><strong>ایمیل:</strong> <span id="email"></span></p><hr>
        <p><strong>تاریخ نوبت:</strong> <span id="appointmentDate"></span></p><hr>
        <p><strong>ساعت نوبت:</strong> <span id="appointmentTime"></span></p><hr>
        <p><strong>توضیحات:</strong> <span id="description"></span></p><hr>
        <p><strong>مبلغ قابل پرداخت:</strong> <span id="price"></span> تومان</p><hr>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="کد تخفیف">
                    <button type="submit" class="btn btn-secondary">اعمال</button>
                </div><hr>
                <input type="hidden" name="therapist" value="<?php echo htmlspecialchars($therapist); ?>">
                <input type="hidden" name="name" value="<?php echo htmlspecialchars($name); ?>">
                <input type="hidden" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
                <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
                <input type="hidden" name="appointmentDate" value="<?php echo htmlspecialchars($appointmentDate); ?>">
                <input type="hidden" name="appointmentTime" value="<?php echo htmlspecialchars($appointmentTime); ?>">
                <input type="hidden" name="description" value="<?php echo htmlspecialchars($description); ?>">
                <input type="hidden" name="price" value="<?php echo htmlspecialchars($price); ?>">
                <input type="hidden" name="status" value="<?php echo htmlspecialchars($status); ?>">
            <button type="submit" class="btn btn-outline-dark">پرداخت</button>
         </form>
        <script>
            const urlParams = new URLSearchParams(window.location.search);
            document.getElementById('therapist').textContent = urlParams.get('therapist');
            document.getElementById('name').textContent = urlParams.get('name');
            document.getElementById('phone').textContent = urlParams.get('phone');
            document.getElementById('email').textContent = urlParams.get('email');
            document.getElementById('appointmentDate').textContent = urlParams.get('appointmentDate');
            document.getElementById('appointmentTime').textContent = urlParams.get('appointmentTime');
            document.getElementById('description').textContent = urlParams.get('description');
            document.getElementById('price').textContent = urlParams.get('price');
            document.getElementById('status').textContent = urlParams.get('status');
        </script>
      </div>
     </div>
    </div>
    <div class="bg-dark text-secondary px-4 pt-3 text-center">
        <div class="py-5">
            <h2 class="display-9 fw-bold text-white pb-1">ارتباط با ما</h2>
            <div class="col-lg-6 mx-auto">
                <p class="fs-7 mb-4">هرگونه سوال یا پیشنهاد خود را می توانید از طریق تلگرام با ما در میا بگذارید</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" class="btn btn-outline-info px-4 me-sm-3 fw-bold">ارتباط در تلگرام</button>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-white text-center py-3">
        <hr>
        <p class="my-1">© تمامی حقوق محفوظ است.</p>
    </footer>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border border-0">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">ورود به سایت</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control rounded-3" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput">ایمیل</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-3" id="floatingPassword"
                                placeholder="Password">
                            <label for="floatingPassword">رمز عبور</label>
                        </div>
                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-outline-dark" type="submit">ورود</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <div class="modal fade" id="exampleModals" tabindex="-1" aria-labelledby="exampleModalLabels" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header border border-0">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">ثبت‌نام در سایت</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="">
                             <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3" id="floatingInput">
                                <label for="floatingInput">نام و نام‌خانوادگی</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3" id="floatingInput">
                                <label for="floatingInput">شماره موبایل</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control rounded-3" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">ایمیل</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control rounded-3" id="floatingPassword"
                                    placeholder="Password">
                                <label for="floatingPassword">رمز عبور</label>
                            </div>
                            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-outline-dark" type="submit">ثبت‌نام</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>