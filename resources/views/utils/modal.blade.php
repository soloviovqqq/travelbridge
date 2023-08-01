<div class="modal">
    <div class="modal__content">
        <h1>🇺🇦 ВАЖЛИВО 🇺🇦</h1>
        <h2>Приносимо свої вибачення, ведеться робота по перекладанню сайта українською мовою!</h2>
        <a onclick="hideModal()" class="modal__close">&times;</a>

        <div class="d-flex justify-content-around">
            <div>
                <p>Напишіть нам:</p>
                <p class="m-0">
                    <a href="mailto:book@travelbridge.com.ua">book@travelbridge.com.ua</a>
                </p>
                <p class="m-0">
                    <a href="mailto:travelbridge@ukr.net">travelbridge@ukr.net</a>
                </p>
            </div>

            <div>
                <p>Подзвоніть нам:</p>
                <p class="m-0">
                    <a href="https://t.me/travelbridge" target="_blank" class="label telegram">
                        <span>+380663679318</span>
                        <i class="la la-telegram"></i>
                    </a>
                </p>
                <p class="m-0">
                    <a href="https://wa.me/+353852020257" target="_blank" class="label whatsapp">
                        <span>+353852020257</span>
                        <i class="la la-whatsapp"></i>
                    </a>
                </p>
            </div>
        </div>

        <p class="mt-5 mb-0"><a onclick="hideModal()"><u>Продовжити перегляд сайту</u></a></p>
    </div>
</div>

<script>
    const KEY = 'lastActive';
    const lastActive = window.localStorage.getItem(KEY);
    if (lastActive) {
        if (lastActive < Date.now()) {
            showModal();
        }
        storeLastActive();
    } else {
        showModal();
        storeLastActive();
    }

    function storeLastActive() {
        const time = Date.now() + (30 * 60 * 1000);
        window.localStorage.setItem(KEY, time.toString());
    }

    function showModal() {
        const modal = document.getElementsByClassName("modal")[0];
        if (!modal.classList.contains('active')) {
            modal.classList.add('active');
            document.getElementsByTagName("body")[0].classList.add('modal-active');
        }
    }

    function hideModal() {
        const modal = document.getElementsByClassName("modal")[0];
        if (modal.classList.contains('active')) {
            modal.classList.remove('active');
            document.getElementsByTagName("body")[0].classList.remove('modal-active');
        }
    }
</script>


<style>
    body.modal-active {
        overflow: hidden;
    }
    .modal {
        visibility: hidden;
        opacity: 0;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(0, 0, 0, 0.8);
        transition: all .4s;
        text-align: center;

    }

    .modal h1 {
        font-size: 30px;
    }

    .modal h2 {
        font-weight: 0;
    }

    .modal p,.modal h2 {
        margin: 20px 0;
    }

    .modal.active {
        visibility: visible;
        opacity: 1;
    }

    .modal__content {
        border-radius: 4px;
        position: relative;
        width: 800px;
        max-width: 90%;
        background: #fff;
        padding: 1em 2em;
    }

    .modal__footer {
        text-align: right;
    }

    .modal__footer a {
        color: #585858;
    }

    .modal__footer i {
        color: #d02d2c;
    }

    .modal__close {
        cursor: pointer;
        position: absolute;
        top: -5px;
        right: 10px;
        color: #585858;
        text-decoration: none;
        font-size: 30px;
    }
</style>
