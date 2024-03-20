@extends('layouts.guest.app', ['title' => 'Dashboard'])

@section('content')
    <div class="container pt-3 pb-5 mt-2 mb-4">
        <h1>Kontak</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Alamat</th>
                        <td>Jalan KH. Abdullah Bin Nuh</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>
                            <ul>
                                <li>
                                    <a href="mailto:dislutkanak@cianjurkab.go.id" class="text-danger text-decoration-none">
                                        diskominfosantik@cianjurkab.go.id
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:dislutkanak@cianjurkab.go.id" class="text-danger text-decoration-none">
                                        diskominfosantikcjrofficial@gmail.com
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:dislutkanak@cianjurkab.go.id" class="text-danger text-decoration-none">
                                        LPSE : lpse@cianjurkab.go.id
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>Telepon</th>
                        <td>(0263) 261892</td>
                    </tr>
                    <tr>
                        <th>Website</th>
                        <td>lpse.cianjurkab.go.id</td>
                    </tr>
                    <tr>
                        <th>Faximile</th>
                        <td>(0263) 263686</td>
                    </tr>
                    <tr>
                        <th>Sosial Media</th>
                        <td>
                            <ul>
                                <li>Youtube : Diskominfosantik Cianjur</li>
                                <li>Instagram : diskominfosantikcianjur</li>
                                <li>Facebook : Diskominfosantik Cianjur</li>
                                <li>Twitter : @kominfocianjur</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.2446053526067!2d106.8227451146159!3d-6.219225995486831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a02f4a5b0133f%3A0xa31c0e0007bf0b40!2sMonumen%20Nasional%20(MONAS)!5e0!3m2!1sen!2sid!4v1615731358362!5m2!1sen!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
@endsection
