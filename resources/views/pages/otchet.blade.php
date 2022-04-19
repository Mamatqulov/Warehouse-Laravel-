@extends("layouts.app")
@section('content')
    <ul class="nav nav-tabs mb-2" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="true" style="font-size: 20px">Приходы</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                role="tab" aria-controls="profile" aria-selected="false" style="font-size: 20px">Расходы</button>
        </li>
    </ul>


    <div class="row  justify-content-center p-2  text-white" style="background-color: black">
        <h2 class="text-center">Отчет товаров</h2>
    </div>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            {{-- <div class="row shadow justify-content-senter p-2 d-flex">
                <div class="col">
                    <h4 class="ms-2">От</h4>
                    <div class="input-group mb-3 input-group-lg">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-calendar2-plus-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 3.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5H2.545c-.3 0-.545.224-.545.5zm6.5 5a.5.5 0 0 0-1 0V10H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V11H10a.5.5 0 0 0 0-1H8.5V8.5z" />
                            </svg>
                        </span>
                        <input type="date" name="date" id="white" class="form-control"
                            aria-label="Amount (to the nearest dollar)">
                    </div>
                </div>


                <div class="col">
                    <h4 class="ms-2">До</h4>
                    <div class="input-group mb-3 input-group-lg">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-calendar2-plus-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 3.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5H2.545c-.3 0-.545.224-.545.5zm6.5 5a.5.5 0 0 0-1 0V10H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V11H10a.5.5 0 0 0 0-1H8.5V8.5z" />
                            </svg>
                        </span>
                        <input type="date" name="date" id="white" class="form-control"
                            aria-label="Amount (to the nearest dollar)">
                    </div>
                </div>
                </div> --}}
            <div class="row shadow justify-content-senter p-2 d-flex">
                <div class="col">
                    <h4 class="ms-2">Наимнование</h4>
                    <div class="input-group mb-3 input-group-lg">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                <path
                                    d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                            </svg>
                        </span>
                        <select id="name_p" class="form-control" name="name" type="select" oninput="getPodCate()">
                            <option value="" disabled selected>Выбирите наимнование...</option>
                            @foreach ($name as $item)
                                <option value="{{ $item->number }}">{{ $item->number . ' ' . $item->product }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <table class="table table-bordered shadow">
                    <thead>
                        <tr class="table-dark text-center">
                            <th scope="col">№</th>
                            <th scope="col">Нaимнование</th>
                            <th scope="col">Отделение</th>
                            <th scope="col">Ед.из</th>
                            <th scope="col">Количество</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">

                    </tbody>
                </table>

            </div>
        </div>


        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row shadow justify-content-center p-2 d-flex">
                <div class="col">
                    <h4 class="ms-2">От</h4>
                    <div class="input-group mb-3 input-group-lg">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-calendar2-plus-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 3.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5H2.545c-.3 0-.545.224-.545.5zm6.5 5a.5.5 0 0 0-1 0V10H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V11H10a.5.5 0 0 0 0-1H8.5V8.5z" />
                            </svg>
                        </span>
                        <input type="date" name="date" id="date_from" class="form-control date">
                    </div>
                </div>

                <div class="col">
                    <h4 class="ms-2">До</h4>
                    <div class="input-group mb-3 input-group-lg">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-calendar2-plus-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 3.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5H2.545c-.3 0-.545.224-.545.5zm6.5 5a.5.5 0 0 0-1 0V10H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V11H10a.5.5 0 0 0 0-1H8.5V8.5z" />
                            </svg>
                        </span>
                        <input type="date" name="date" id="date_in" class="form-control date1">
                        
                    </div>
                   
                </div>
                
               

                <div class="col justify-content-center">
                    <button class="btn btn-primary " onclick="getRashod()">OK</button>
                </div>


                <table class="table table-bordered shadow">
                    <thead>
                        <tr class="table-dark text-center">
                            <th scope="col">№</th>
                            <th scope="col">Нaимнование</th>
                            <th scope="col">Отделение</th>
                            <th scope="col">Телефон</th>
                            <th scope="col">Дата</th>
                            <th scope="col">Количество</th>
                          
                        </tr>
                    </thead>
                    <tbody id="tbodyr">

                    </tbody>
                </table>

            </div>

        </div>

        <script>
            let request = new XMLHttpRequest();
            let name_p = document.getElementById('name_p')
            let tbody = document.getElementById('tbody')
            let id1 = 1

            function getPodCate() {
                request.open("GET", "http://localhost/laravel/public/showTovar/" + name_p.value);
                request.onreadystatechange = reqReadyStateChange;
                request.send();
            }

            function reqReadyStateChange() {

                while (tbody.lastChild) {
                    tbody.removeChild(tbody.lastChild);
                    id1 = 1
                }
                if (request.readyState == 4) {
                    let status = request.status;
                    if (status == 200) {
                        let jsonData = JSON.parse(request.response);
                        jsonData.forEach(element => {
                            let tr = document.createElement('tr')
                            let id = document.createElement('td')
                            let name = document.createElement('td')
                            let premechanie = document.createElement('td')
                            let razmer = document.createElement('td')
                            let count_p = document.createElement('td')

                            id.innerText = id1
                            name.innerText = element.name
                            premechanie.innerText = element.premechanie
                            razmer.innerText = element.razmer
                            count_p.innerText = element.count_p
                            tr.append(id)
                            tr.append(name)
                            tr.append(premechanie)
                            tr.append(razmer)
                            tr.append(count_p)
                            tbody.append(tr)
                            id1++
                        });
                    }
                }
            }

            function getRashod() {
                let tbodyr = document.getElementById('tbodyr')
                let date_from = document.getElementById('date_from')
                let date_in = document.getElementById('date_in')

                request.open("GET", "http://localhost/laravel/public/showRashod/" + date_from.value + "&" + date_in.value);
                request.onreadystatechange = reqReadyState;
                request.send();
            }

            function reqReadyState() {

                while (tbodyr.lastChild) {
                    tbodyr.removeChild(tbodyr.lastChild);
                    id1 = 1
                }

                if (request.readyState == 4) {
                    let status = request.status;
                    if (status == 200) {
                        let jsonData = JSON.parse(request.response);
                        jsonData.forEach(element => {
                            console.log(element);
                            let tr = document.createElement('tr')
                            let id = document.createElement('td')
                            let id_rashod = document.createElement('td')
                            let pokupatel = document.createElement('td')
                            let tel = document.createElement('td')
                            let date = document.createElement('td')
                            let count_r = document.createElement('td')

                            id.innerText = id1
                            id_rashod.innerText = element.id_rashod
                            pokupatel.innerText = element.pokupatel
                            tel.innerText = element.tel
                            date.innerText = element.date
                            count_r.innerText = element.count_r
                            tr.append(id)
                            tr.append(id_rashod)
                            tr.append(pokupatel)
                            tr.append(tel)
                            tr.append(date)
                            tr.append(count_r)
                            tbodyr.append(tr)
                            id1++
                        });
                    }
                }
            }
        </script>
    @endsection
