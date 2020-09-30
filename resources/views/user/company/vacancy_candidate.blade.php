@extends('user.default', ['title' => 'Candidatos da vaga: '.$vacancy->profession->title])
@section('content-user')
   
    <div class="col-lg-8">

        <div class="month-table">
            <div class="table-responsive mt-3">
                <table class="table stylish-table mb-0 no-wrap v-middle">
                    <thead>
                        <tr>
                            <th class="border-0 text-muted font-weight-medium" colspan="2">Assigned</th>
                            <th class="border-0 text-muted font-weight-medium">Name</th>
                            <th class="border-0 text-muted font-weight-medium">Priority</th>
                            <th class="border-0 text-muted font-weight-medium">Budget</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width:50px;"><span class="round text-white d-inline-block text-center rounded-circle bg-info">S</span>
                            </td>
                            <td>
                                <h6 class="font-weight-medium mb-0">Sunil Joshi</h6><small class="text-muted">Web
                                    Designer</small>
                            </td>
                            <td>Elite Admin</td>
                            <td><span class="badge badge-success px-2 py-1">Low</span></td>
                            <td>$3.9K</td>
                        </tr>
                        <tr class="active">
                            <td><span class="round text-white d-inline-block text-center rounded-circle bg-info"><img src="../assets/images/users/2.jpg" class="rounded-circle" alt="user" width="50"></span></td>
                            <td>
                                <h6 class="font-weight-medium mb-0">Andrew</h6><small class="text-muted">Project Manager</small>
                            </td>
                            <td>Real Homes</td>
                            <td><span class="badge badge-info px-2 py-1">Medium</span></td>
                            <td>$23.9K</td>
                        </tr>
                        <tr>
                            <td><span class="round text-white d-inline-block text-center rounded-circle bg-success">B</span>
                            </td>
                            <td>
                                <h6 class="font-weight-medium mb-0">Bhavesh patel</h6><small class="text-muted">Developer</small>
                            </td>
                            <td>MedicalPro Theme</td>
                            <td><span class="badge badge-primary px-2 py-1">High</span></td>
                            <td>$12.9K</td>
                        </tr>
                        <tr>
                            <td><span class="round text-white d-inline-block text-center rounded-circle bg-primary">N</span>
                            </td>
                            <td>
                                <h6 class="font-weight-medium mb-0">Nirav Joshi</h6><small class="text-muted">Frontend
                                    Eng</small>
                            </td>
                            <td>Elite Admin</td>
                            <td><span class="badge badge-danger px-2 py-1">Low</span></td>
                            <td>$10.9K</td>
                        </tr>
                        <tr>
                            <td><span class="round text-white d-inline-block text-center rounded-circle bg-warning">M</span>
                            </td>
                            <td>
                                <h6 class="font-weight-medium mb-0">Micheal Doe</h6><small class="text-muted">Content
                                    Writer</small>
                            </td>
                            <td>Helping Hands</td>
                            <td><span class="badge badge-warning px-2 py-1">High</span></td>
                            <td>$12.9K</td>
                        </tr>
                        <tr>
                            <td><span class="round text-white d-inline-block text-center rounded-circle bg-danger">N</span>
                            </td>
                            <td>
                                <h6 class="font-weight-medium mb-0">Johnathan</h6><small class="text-muted">Graphic</small>
                            </td>
                            <td>Digital Agency</td>
                            <td><span class="badge badge-info px-2 py-1">High</span></td>
                            <td>$2.6K</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@stop
