@extends("layouts.app")
@section('content')
    <ul class="nav nav-tabs mb-2" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="true" style="font-size: 20px">Мои расходы</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                role="tab" aria-controls="profile" aria-selected="false" style="font-size: 20px">Сделать расход</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <table class="table table-bordered shadow">
                <thead>
                    <tr class="table-dark text-center">
                        <th scope="col">№</th>
                        <th scope="col">Номер док</th>
                        <th scope="col">Покупател</th>
                        <th scope="col">Тел</th>
                        <th scope="col">Дата</th>
                        <th scope="col">Доставка</th>
                        <th scope="col">Количество</th>
                        <th scope="col">Операции</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($rashods as $product)
                        <tr class="table-secondary">
                            <th scope="row" class="table-dark text-white text-center">{{ $i++ }}</th>
                            <td scope="row ">{{ $product->id_rashod }}</td>
                            <td scope="row ">{{ $product->pokupatel }}</td>
                            <td scope="row ">{{ $product->tel }}</td>
                            <td scope="row ">{{ $product->date }}</td>
                            <td scope="row ">{{ $product->dostavka }}</td>
                            <td scope="row ">{{ $product->count_r }}</td>
                            <td scope="row " class="text-center">
                                <a href="" class="btn btn-warning btn-sm border me-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                </a>
                                <a href="{{ route('delete', ['id' => $product->id]) }}"
                                    class="btn btn-warning btn-sm border ms-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-trash" viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                        <path fill-rule="evenodd"
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <form action="{{ route('rashod') }}" method="POST" name="form1" id="form1">
                @csrf
                <div class="conteiner shadow justify-content-center p-2 text-white" style="background-color: black">
                    <h2 class="text-center">ЗАКАЗ</h2>
                </div>
                <div class="shadow p-2 text-dark" style="background-color: #E2E3E5">
                    <div class="d-flex">
                        <div class="col-5 ms-3">
                            <h4 class="ms-2">Номер документа</h4>
                            <div class="input-group mb-3 input-group-lg">
                                <span class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                        class="bi bi-file-earmark-post" viewBox="0 0 16 16">
                                        <path
                                            d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                                        <path
                                            d="M4 6.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-7zm0-3a.5.5 0 0 1 .5-.5H7a.5.5 0 0 1 0 1H4.5a.5.5 0 0 1-.5-.5z" />
                                    </svg>
                                </span>
                                {{-- <input type="text" name="id_rashod" id="name" placeholder="№ххххххххх" class="form-control" aria-label="Amount (to the nearest dollar)"> --}}
                                <select id="inputState" class="form-control" name="id_rashod" type="select">
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
                            </div>
                            <h4 class="ms-2">Покупатель</h4>
                            <div class="input-group mb-3 input-group-lg">
                                <span class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                        class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>
                                </span>
                                <select id="inputState" class="form-control" name="pokupatel">
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
                                {{-- <input type="text" name="pokupatel" id="premechanie" placeholder="Начните вводить..." class="form-control" aria-label="Amount (to the nearest dollar)"> --}}
                            </div>

                            <h4 class="ms-2">Телефон</h4>
                            <div class="input-group mb-3 input-group-lg">
                                <span class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                        class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                    </svg>
                                </span>
                                <input type="text" name="tel" id="razmer" placeholder="92-888-88-88" class="form-control"
                                    onkeyup="this.value=this.value.replace(/[^\d]/,'')">
                            </div>
                        </div>
                        <div class="col-5 ms-3">

                            <h4 class="ms-2">Дата</h4>
                            <div class="input-group mb-3 input-group-lg">
                                <span class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                        class="bi bi-calendar2-plus-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 3.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5H2.545c-.3 0-.545.224-.545.5zm6.5 5a.5.5 0 0 0-1 0V10H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V11H10a.5.5 0 0 0 0-1H8.5V8.5z" />
                                    </svg>
                                </span>
                                <input type="date" name="date" id="white" class="form-control">
                            </div>


                            <h4 class="ms-2">Доставка</h4>
                            <div class="input-group mb-3 input-group-lg">
                                <span class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                        class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z" />
                                    </svg>
                                </span>
                                <select id="inputState" class="form-control" name="dostavka" id="name">
                                    <option value="" disabled selected>Выбирите план доставки...</option>
                                    <option value="Через 1 час">Через 1 час</option>
                                    <option value="Через 4 час">Через 4 час</option>
                                    <option value="Через 12 час">Через 12 час</option>
                                    <option value="Через 16 час">Через 16 час</option>
                                    <option value="Втечение 24 час">Втечение 24 час</option>
                                    <option value="Завтра">Завтра</option>
                                </select>
                                {{-- <input type="number" name="dostavka" id="dcolor" class="form-control" min="1" max="24" --}}
                                {{-- placeholder="Вводить часы доставки..." aria-label="Amount (to the nearest dollar)"> --}}
                            </div>

                            <h4 class="ms-2">Количество</h4>
                            <div class="input-group mb-3 input-group-lg">
                                <span class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                        class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                                    </svg>
                                </span>
                                <input type="text" name="count_r" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="conteiner d-flex justify-content-end mt-2">
                        <button type="submit" class="btn btn-primary btn-lg me-3">Отправить товар</button>
                        <button type="button" class="btn btn-secondary btn-lg">Очистить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection