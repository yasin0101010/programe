// Form Submission Handler
document.getElementById('contact-form').addEventListener('submit', function (e) {
    e.preventDefault(); // منع ارسال فرم

    const name = document.querySelector('input[type="text"]').value;
    const email = document.querySelector('input[type="email"]').value;
    const message = document.querySelector('textarea').value;

    if (name && email && message) {
        alert('پیام شما با موفقیت ارسال شد!');
        this.reset(); // فرم را خالی کن
    } else {
        alert('لطفاً تمام فیلدها را پر کنید.');
    }
});