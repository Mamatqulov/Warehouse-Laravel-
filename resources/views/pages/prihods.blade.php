@extends("layouts.app")
@section('content')
    <form action="{{ route('prihod') }}" method="POST" name="form1" id="form1">
        @csrf

        <div class="canteiner shadow justify-content-center p-2  text-white " style="background-color: black">
            <h2 class="text-center">Приходь товаров</h2>
        </div>
        <div class="shadow p-2 text-dark" style="background-color: #E2E3E5">
            <div class="d-flex">
                <div class="col-5 ms-3">
                    <h4 class="ms-2">Наимнование</h4>
                    <div class="input-group mb-3 input-group-lg">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                <path
                                    d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                            </svg>
                        </span>
                        <select id="inputState" class="form-control" name="name" type="select">
                            <option value="" disabled selected>Выбирите наимнование...</option>
                            <option value="№6701 (Монитор)">№6701 (Монитор)</option>
                            <option value="№6702 (Клавиатура)">№6702 (Клавиатура)</option>
                            <option value="№6703 (Муш)">№6703 (Муш)</option>
                            <option value="№6704 (Принтер)">№6704 (Принтер)</option>
                            <option value="№6705 (LAN)">№6705 (LAN)</option>
                            <option value="№6706 (Проектор)">№6706 (Проектор)</option>
                            <option value="№6707 (Switch)">№6707 (Switch)</option>
                            <option value="№6708 (Ноутбук)">№6708 (Ноутбук)</option>
                            <option value="№6709 (HDMI)">№6709 (HDMI)</option>
                            <option value="№6710 (USB-LAN)">№6710 (USB-LAN)</option>
                        </select>
                        {{-- <input type="text" name="name" id="name" class="form-control" aria-label="Amount (to the nearest dollar)"> --}}
                    </div>
                    <h4 class="ms-2">Примичание</h4>
                    <div class="input-group mb-3 input-group-lg">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-bookmarks-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4z" />
                                <path
                                    d="M4.268 1A2 2 0 0 1 6 0h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L13 13.768V2a1 1 0 0 0-1-1H4.268z" />
                            </svg>
                        </span>
                        <select id="inputState" class="form-control" name="premechanie" id="name">
                            <option value="" disabled selected>Отделение...</option>
                            <option value="Кадр">Кадр</option>
                            <option value="БЕК-ОФИС">БЕК-ОФИС</option>
                            <option value="Касса">Касса</option>
                            <option value="Эксперт-1">Эксперт-1</option>
                            <option value="Эксперт-2">Эксперт-2</option>
                            <option value="СБ">СБ</option>
                            <option value="Комитет">Комитет</option>
                            <option value="Барномасозон">Барномасозон</option>
                        </select>
                        {{-- <input type="text" name="premechanie" id="premechanie" class="form-control" aria-label="Amount (to the nearest dollar)"> --}}

                    </div>
                    <h4 class="ms-2">Размер</h4>
                    <div class="input-group mb-3 input-group-lg">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-sort-numeric-down" viewBox="0 0 16 16">
                                <path d="M12.438 1.668V7H11.39V2.684h-.051l-1.211.859v-.969l1.262-.906h1.046z" />
                                <path fill-rule="evenodd"
                                    d="M11.36 14.098c-1.137 0-1.708-.657-1.762-1.278h1.004c.058.223.343.45.773.45.824 0 1.164-.829 1.133-1.856h-.059c-.148.39-.57.742-1.261.742-.91 0-1.72-.613-1.72-1.758 0-1.148.848-1.835 1.973-1.835 1.09 0 2.063.636 2.063 2.687 0 1.867-.723 2.848-2.145 2.848zm.062-2.735c.504 0 .933-.336.933-.972 0-.633-.398-1.008-.94-1.008-.52 0-.927.375-.927 1 0 .64.418.98.934.98z" />
                                <path
                                    d="M4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z" />
                            </svg>
                        </span>
                        <input type="text" name="razmer" id="razmer" class="form-control"
                            onkeyup="this.value=this.value.replace(/[^\d]/,'')">
                    </div>

                </div>
                <div class="container">
                    <h4 class="ms-2">Количество</h4>
                    <div class="input-group mb-3 input-group-lg">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-sort-down" viewBox="0 0 16 16">
                                <path
                                    d="M3.5 2.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 11.293V2.5zm3.5 1a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z" />
                            </svg>
                        </span>
                        <input type="text" name="count_p" id="count" class="form-control"
                            onkeyup="this.value=this.value.replace(/[^\d]/,'')">
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex">
                                <h4 class="ms-3">Белый</h4>
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkWhite"
                                    style="width: 25px; height: 25px;" onclick="ckeckWhite()">
                            </div>
                            <div style="display: none" id="divWhite">
                                <div class="input-group mb-3 input-group-lg">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                            class="bi bi-paint-bucket" viewBox="0 0 16 16">
                                            <path
                                                d="M6.192 2.78c-.458-.677-.927-1.248-1.35-1.643a2.972 2.972 0 0 0-.71-.515c-.217-.104-.56-.205-.882-.02-.367.213-.427.63-.43.896-.003.304.064.664.173 1.044.196.687.556 1.528 1.035 2.402L.752 8.22c-.277.277-.269.656-.218.918.055.283.187.593.36.903.348.627.92 1.361 1.626 2.068.707.707 1.441 1.278 2.068 1.626.31.173.62.305.903.36.262.05.64.059.918-.218l5.615-5.615c.118.257.092.512.05.939-.03.292-.068.665-.073 1.176v.123h.003a1 1 0 0 0 1.993 0H14v-.057a1.01 1.01 0 0 0-.004-.117c-.055-1.25-.7-2.738-1.86-3.494a4.322 4.322 0 0 0-.211-.434c-.349-.626-.92-1.36-1.627-2.067-.707-.707-1.441-1.279-2.068-1.627-.31-.172-.62-.304-.903-.36-.262-.05-.64-.058-.918.219l-.217.216zM4.16 1.867c.381.356.844.922 1.311 1.632l-.704.705c-.382-.727-.66-1.402-.813-1.938a3.283 3.283 0 0 1-.131-.673c.091.061.204.15.337.274zm.394 3.965c.54.852 1.107 1.567 1.607 2.033a.5.5 0 1 0 .682-.732c-.453-.422-1.017-1.136-1.564-2.027l1.088-1.088c.054.12.115.243.183.365.349.627.92 1.361 1.627 2.068.706.707 1.44 1.278 2.068 1.626.122.068.244.13.365.183l-4.861 4.862a.571.571 0 0 1-.068-.01c-.137-.027-.342-.104-.608-.252-.524-.292-1.186-.8-1.846-1.46-.66-.66-1.168-1.32-1.46-1.846-.147-.265-.225-.47-.251-.607a.573.573 0 0 1-.01-.068l3.048-3.047zm2.87-1.935a2.44 2.44 0 0 1-.241-.561c.135.033.324.11.562.241.524.292 1.186.8 1.846 1.46.45.45.83.901 1.118 1.31a3.497 3.497 0 0 0-1.066.091 11.27 11.27 0 0 1-.76-.694c-.66-.66-1.167-1.322-1.458-1.847z" />
                                        </svg>
                                    </span>
                                    <input type="text" name="white" id="white" class="form-control"
                                        onkeyup="this.value=this.value.replace(/[^\d]/,'')">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex">
                                <h4 class="ms-3">Чёрный</h4>
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkD"
                                    style="width: 25px; height: 25px;" onclick="ckeckD()">
                            </div>
                            <div style="display: none" id="divD">
                                <div class="input-group mb-3 input-group-lg">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                            class="bi bi-paint-bucket" viewBox="0 0 16 16">
                                            <path
                                                d="M6.192 2.78c-.458-.677-.927-1.248-1.35-1.643a2.972 2.972 0 0 0-.71-.515c-.217-.104-.56-.205-.882-.02-.367.213-.427.63-.43.896-.003.304.064.664.173 1.044.196.687.556 1.528 1.035 2.402L.752 8.22c-.277.277-.269.656-.218.918.055.283.187.593.36.903.348.627.92 1.361 1.626 2.068.707.707 1.441 1.278 2.068 1.626.31.173.62.305.903.36.262.05.64.059.918-.218l5.615-5.615c.118.257.092.512.05.939-.03.292-.068.665-.073 1.176v.123h.003a1 1 0 0 0 1.993 0H14v-.057a1.01 1.01 0 0 0-.004-.117c-.055-1.25-.7-2.738-1.86-3.494a4.322 4.322 0 0 0-.211-.434c-.349-.626-.92-1.36-1.627-2.067-.707-.707-1.441-1.279-2.068-1.627-.31-.172-.62-.304-.903-.36-.262-.05-.64-.058-.918.219l-.217.216zM4.16 1.867c.381.356.844.922 1.311 1.632l-.704.705c-.382-.727-.66-1.402-.813-1.938a3.283 3.283 0 0 1-.131-.673c.091.061.204.15.337.274zm.394 3.965c.54.852 1.107 1.567 1.607 2.033a.5.5 0 1 0 .682-.732c-.453-.422-1.017-1.136-1.564-2.027l1.088-1.088c.054.12.115.243.183.365.349.627.92 1.361 1.627 2.068.706.707 1.44 1.278 2.068 1.626.122.068.244.13.365.183l-4.861 4.862a.571.571 0 0 1-.068-.01c-.137-.027-.342-.104-.608-.252-.524-.292-1.186-.8-1.846-1.46-.66-.66-1.168-1.32-1.46-1.846-.147-.265-.225-.47-.251-.607a.573.573 0 0 1-.01-.068l3.048-3.047zm2.87-1.935a2.44 2.44 0 0 1-.241-.561c.135.033.324.11.562.241.524.292 1.186.8 1.846 1.46.45.45.83.901 1.118 1.31a3.497 3.497 0 0 0-1.066.091 11.27 11.27 0 0 1-.76-.694c-.66-.66-1.167-1.322-1.458-1.847z" />
                                        </svg>
                                    </span>
                                    <input type="text" name="dcolor" id="dcolor" class="form-control"
                                        onkeyup="this.value=this.value.replace(/[^\d]/,'')">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex">
                                <h4 class="ms-3">Другое</h4>
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkPD"
                                    style="width: 25px; height: 25px;" onclick="ckeckPD()">
                            </div>
                            <div style="display: none" id="divPD">
                                <div class="input-group mb-3 input-group-lg">
                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="32"
                                            height="32" fill="currentColor" class="bi bi-paint-bucket" viewBox="0 0 16 16">
                                            <path
                                                d="M6.192 2.78c-.458-.677-.927-1.248-1.35-1.643a2.972 2.972 0 0 0-.71-.515c-.217-.104-.56-.205-.882-.02-.367.213-.427.63-.43.896-.003.304.064.664.173 1.044.196.687.556 1.528 1.035 2.402L.752 8.22c-.277.277-.269.656-.218.918.055.283.187.593.36.903.348.627.92 1.361 1.626 2.068.707.707 1.441 1.278 2.068 1.626.31.173.62.305.903.36.262.05.64.059.918-.218l5.615-5.615c.118.257.092.512.05.939-.03.292-.068.665-.073 1.176v.123h.003a1 1 0 0 0 1.993 0H14v-.057a1.01 1.01 0 0 0-.004-.117c-.055-1.25-.7-2.738-1.86-3.494a4.322 4.322 0 0 0-.211-.434c-.349-.626-.92-1.36-1.627-2.067-.707-.707-1.441-1.279-2.068-1.627-.31-.172-.62-.304-.903-.36-.262-.05-.64-.058-.918.219l-.217.216zM4.16 1.867c.381.356.844.922 1.311 1.632l-.704.705c-.382-.727-.66-1.402-.813-1.938a3.283 3.283 0 0 1-.131-.673c.091.061.204.15.337.274zm.394 3.965c.54.852 1.107 1.567 1.607 2.033a.5.5 0 1 0 .682-.732c-.453-.422-1.017-1.136-1.564-2.027l1.088-1.088c.054.12.115.243.183.365.349.627.92 1.361 1.627 2.068.706.707 1.44 1.278 2.068 1.626.122.068.244.13.365.183l-4.861 4.862a.571.571 0 0 1-.068-.01c-.137-.027-.342-.104-.608-.252-.524-.292-1.186-.8-1.846-1.46-.66-.66-1.168-1.32-1.46-1.846-.147-.265-.225-.47-.251-.607a.573.573 0 0 1-.01-.068l3.048-3.047zm2.87-1.935a2.44 2.44 0 0 1-.241-.561c.135.033.324.11.562.241.524.292 1.186.8 1.846 1.46.45.45.83.901 1.118 1.31a3.497 3.497 0 0 0-1.066.091 11.27 11.27 0 0 1-.76-.694c-.66-.66-1.167-1.322-1.458-1.847z" />
                                        </svg>
                                    </span>
                                    <input type="text" name="pdcolor" id="pdcolor" class="form-control"
                                        onkeyup="this.value=this.value.replace(/[^\d]/,'')">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="conteiner d-flex justify-content-end">
                <button type="submit" class="btn btn-primary btn-lg me-3">Добавить товар</button>
                <button type="button" class="btn btn-secondary btn-lg">Очистить</button>
            </div>
    </form>

    <script>
        function ckeckWhite() {
            if (document.getElementById('checkWhite').checked) {
                document.getElementById('divWhite').style.display = "block";
            } else {
                document.getElementById('divWhite').style.display = "none";
            }
        }

        function ckeckPD() {
            if (document.getElementById('checkPD').checked) {
                document.getElementById('divPD').style.display = "block";
            } else {
                document.getElementById('divPD').style.display = "none";
            }
        }

        function ckeckD() {
            if (document.getElementById('checkD').checked) {
                document.getElementById('divD').style.display = "block";
            } else {
                document.getElementById('divD').style.display = "none";
            }
        }
    </script>
@endsection
