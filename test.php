<?php
  echo "Hello World！";
?>
<body class="h-100">

<!-- ここ追加  -->

<main class="h-100 d-flex justify-content-center align-items-center">
    <div class="form-wrapper container">
        <form onsubmit="formHandler(event)" id="contactForm" name="contactForm">
            <div class="alert alert-success d-none" role="alert"></div>
            <div class="form-title border-bottom mb-4">
                <h4 class="">お問い合わせ</h4>
            </div>
            <div class="form-row mb-2">
                <lable for="customer_name">お名前</lable>
                <input type="text" name="customer_name" id="customer_name" class="bg-light form-control form-control-sm" required>
            </div>
            <div class="form-row mb-2">
                <lable for="name">E-mail</lable>
                <input type="email" name="email" id="email" class="bg-light form-control form-control-sm" required>
            </div>
            <div class="form-row mb-2">
                <lable for="name">内容</lable>
                <textarea name="suject" id="subject" cols="30" rows="10" class="bg-light form-control form-control-sm" required></textarea>
            </div>
            <div class="fomr-row mb-2">
                <button type="submit" name="submit" class="btn py-2 btn-primary w-100">
                    <div class="spinner-border text-light spinner-border-sm mr-2 d-none" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    送信
                </button>
            </div>
        </form>
    </div>
</main>    
<!-- ここ追加  -->
<script src="./js/main.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>