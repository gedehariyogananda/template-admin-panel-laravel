<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Campain;
use App\Models\HistoryCampain;
use App\Models\ReqCamp;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Gede Hari Yoga Nanda',
            'roles' => 'admin',
            'email' => 'gede@gmail.com',
            'password' => Hash::make('password'),
            'institusi' => 'PENS',
        ]);

        User::create([
            'name' => 'Handaru Dwiking',
            'roles' => 'admin',
            'email' => 'handaru@gmail.com',
            'password' => Hash::make('password'),
            'institusi' => 'PENS',
        ]);

        User::create([
            'name' => 'Iqbal',
            'roles' => 'admin',
            'email' => 'iqbal@gmail.com',
            'password' => Hash::make('password'),
            'institusi' => 'PENS',
        ]);


        // role user
        User::create([
            'name' => 'Ovelos Team',
            'roles' => 'user',
            'email' => 'suroto@gmail.com',
            'password' => Hash::make('password'),
            'phone_number' => '0831333232',
            'institusi' => 'Universitas Padjajaran',
        ]);

        User::create([
            'name' => 'Billy Edon',
            'roles' => 'user',
            'email' => 'marga@gmail.com',
            'password' => Hash::make('password'),
            'phone_number' => '0831333232',
            'institusi' => 'Universitas Negeri Semarang',
        ]);

        User::create([
            'name' => 'Funnari',
            'roles' => 'user',
            'email' => 'satwa@gmail.com',
            'password' => Hash::make('password'),
            'phone_number' => '0831333232',
            'institusi' => 'Universitas Negeri Surabaya',
        ]);

        User::create([
            'name' => 'FTEIC',
            'roles' => 'user',
            'email' => 'fteic@gmail.com',
            'password' => Hash::make('password'),
            'phone_number' => '0831333232',
            'institusi' => 'Universitas Indonesia',
        ]);

        User::create([
            'name' => 'FTPK',
            'roles' => 'user',
            'email' => 'ftpk@gmail.com',
            'password' => Hash::make('password'),
            'phone_number' => '0831333232',
            'institusi' => 'Universitas Pendidikan Indonesia',
        ]);

        User::create([
            'name' => 'FINTEACH',
            'roles' => 'user',
            'email' => 'kuffur@gmail.com',
            'password' => Hash::make('password'),
            'phone_number' => '0831333232',
            'institusi' => 'Universitas Negeri Surabaya',
        ]);

        User::create([
            'name' => 'FANACT',
            'roles' => 'user',
            'email' => 'fanat@gmail.com',
            'password' => Hash::make('password'),
            'phone_number' => '0831333232',
            'institusi' => 'Institut Negeri Sebelas Maret',
        ]);

        User::create([
            'name' => 'FORBAL TEAM',
            'roles' => 'user',
            'email' => 'kuffuron@gmail.com',
            'password' => Hash::make('password'),
            'phone_number' => '0831333232',
            'institusi' => 'Universitas Negeri Surabaya',
        ]);

        User::create([
            'name' => 'DOA IBU',
            'roles' => 'user',
            'email' => 'doaibu@gmail.com',
            'password' => Hash::make('password'),
            'phone_number' => '0831333232',
            'institusi' => 'Politeknik Elektronika Negeri Surabaya',
        ]);

        User::create([
            'name' => 'Hore Team',
            'roles' => 'user',
            'email' => 'hore@gmail.com',
            'password' => Hash::make('password'),
            'phone_number' => '0831333232',
            'institusi' => 'Politeknik Elektronika Negeri Surabaya',
        ]);

        User::create([
            'name' => 'ERLON',
            'roles' => 'user',
            'email' => 'erlon@gmail.com',
            'password' => Hash::make('password'),
            'phone_number' => '0831333232',
            'institusi' => 'Politeknik Elektronika Negeri Surabaya',
        ]);

        // reg campain
        ReqCamp::create([
            'user_id' => '4',
            'judul_campain' => 'Robot Pengendali Potensi DBD',
            'proposal' => 'proposalpengendali.pdf',
            'target' => '1500000',
            'payment_method' => 'BCA',
            'no_rekening' => '131313131313',
            'banner' => 'banner1.jpg',
            'deskripsi' => 'kami dari tim robotik pens ingin membuat suatu product motor listrik tenaga surya dimana nantinya akan bermanfaat unuk banyak orang didunia, dengan itu kami ingin mengajukan campains bantuan ke website 3funding unutk mensukseskan product kami',
            'status' => 'Proses Published Campaign',
        ]);

        ReqCamp::create([
            'user_id' => '5',
            'judul_campain' => 'Sepeda Listrik Tenaga Surya',
            'proposal' => 'proposalpengendali.pdf',
            'target' => '2500000',
            'payment_method' => 'BCA',
            'no_rekening' => '131313131313',
            'banner' => 'banner1.jpg',
            'deskripsi' => 'kami dari tim robotik pens ingin membuat suatu product sepeda listrik tenaga surya dimana nantinya akan bermanfaat unuk banyak orang didunia, dengan itu kami ingin mengajukan campains bantuan ke website 3funding unutk mensukseskan product kami',
            'status' => 'Proses Published Campaign',
        ]);

        ReqCamp::create([
            'user_id' => '6',
            'judul_campain' => 'Sepeda Listrik Tenaga Batrai',
            'proposal' => 'proposalpengendali.pdf',
            'target' => '1500000',
            'payment_method' => 'BCA',
            'no_rekening' => '131313131313',
            'banner' => 'banner1.jpg',
            'deskripsi' => 'kami dari tim robotik pens ingin membuat suatu product sepeda listrik tenaga batrai dimana nantinya akan bermanfaat unuk banyak orang didunia, dengan itu kami ingin mengajukan campains bantuan ke website 3funding unutk mensukseskan product kami',
            'status' => 'Proses Published Campaign',
        ]);

        ReqCamp::create([
            'user_id' => '7',
            'judul_campain' => 'Aplikasi Pencegahan Pernikahan Dini',
            'proposal' => 'proposalpengendali.pdf',
            'target' => '28500000',
            'payment_method' => 'BCA',
            'no_rekening' => '131313131313',
            'banner' => 'banner1.jpg',
            'deskripsi' => 'kami dari tim robotik ingin membuat suatu product aplikasi pencegahan pernikahan dini dimana nantinya akan bermanfaat unuk banyak orang didunia, dengan itu kami ingin mengajukan campains bantuan ke website 3funding unutk mensukseskan product kami',
            'status' => 'Proses Published Campaign',
        ]);

        ReqCamp::create([
            'user_id' => '8',
            'judul_campain' => 'Aplikasi Pencegahan Penyakit Berbahaya',
            'proposal' => 'proposalpengendali.pdf',
            'target' => '28500000',
            'payment_method' => 'BCA',
            'banner' => 'banner1.jpg',
            'no_rekening' => '131313131313',
            'deskripsi' => 'kami dari tim ingin membuat suatu product dimana nantinya akan bermanfaat unuk banyak orang didunia, dengan itu kami ingin mengajukan campains bantuan ke website 3funding unutk mensukseskan product kami',
            'status' => 'Proses Published Campaign',
        ]);

        ReqCamp::create([
            'user_id' => '9',
            'judul_campain' => 'Alat Pengawet Ikan Bertenaga Angin',
            'proposal' => 'proposalpengendali.pdf',
            'target' => '98500000',
            'payment_method' => 'BCA',
            'no_rekening' => '131313131313',
            'banner' => 'banner1.jpg',
            'deskripsi' => 'kami dari tim ingin membuat suatu product alat pengendali pengawetan ikan bertenaga angin dimana nantinya akan bermanfaat unuk banyak orang didunia, dengan itu kami ingin mengajukan campains bantuan ke website 3funding unutk mensukseskan product kami',
            'status' => 'Proses Published Campaign',
        ]);

        ReqCamp::create([
            'user_id' => '10',
            'judul_campain' => 'Aplikasi Konsultasi Psikologi',
            'proposal' => 'proposalpengendali.pdf',
            'target' => '10500000',
            'payment_method' => 'BCA',
            'no_rekening' => '131313131313',
            'banner' => 'banner1.jpg',
            'deskripsi' => 'kami dari tim ingin membuat suatu product dimana nantinya akan bermanfaat unuk banyak orang didunia, dengan itu kami ingin mengajukan campains bantuan ke website 3funding unutk mensukseskan product kami',
            'status' => 'Proses Published Campaign',
        ]);

        ReqCamp::create([
            'user_id' => '11',
            'judul_campain' => 'Aplikasi Konsultasi Psikologi Jiwa Berbasis Mobile',
            'proposal' => 'proposalpengendali.pdf',
            'target' => '20000000',
            'payment_method' => 'BCA',
            'no_rekening' => '131313131313',
            'banner' => 'banner1.jpg',
            'deskripsi' => 'kami dari tim ingin membuat suatu product dimana nantinya akan bermanfaat unuk banyak orang didunia, dengan itu kami ingin mengajukan campains bantuan ke website 3funding unutk mensukseskan product kami',
            'status' => 'Proses Published Campaign',
        ]);

        ReqCamp::create([
            'user_id' => '12',
            'judul_campain' => 'Aplikasi Konsultasi Dokter',
            'proposal' => 'proposalpengendali.pdf',
            'target' => '20000000',
            'payment_method' => 'BCA',
            'no_rekening' => '131313131313',
            'banner' => 'banner1.jpg',
            'deskripsi' => 'kami dari tim ingin membuat suatu product dimana nantinya akan bermanfaat unuk banyak orang didunia, dengan itu kami ingin mengajukan campains bantuan ke website 3funding unutk mensukseskan product kami',
            'status' => 'Proses Published Campaign',
        ]);

        ReqCamp::create([
            'user_id' => '13',
            'judul_campain' => 'Aplikasi Konsultasi Agama',
            'proposal' => 'proposalpengendali.pdf',
            'target' => '20000000',
            'payment_method' => 'BCA',
            'no_rekening' => '131313131313',
            'banner' => 'banner1.jpg',
            'deskripsi' => 'kami dari tim ingin membuat suatu product dimana nantinya akan bermanfaat unuk banyak orang didunia, dengan itu kami ingin mengajukan campains bantuan ke website 3funding unutk mensukseskan product kami',
            'status' => 'Proses Published Campaign',
        ]);

        // campains 
        Campain::create([
            'user_id' => '4',
            'title_campains' => 'Robot Pengendali Potensi DBD',
            'banner_campains' => 'img-banner-campains/tJbqy76RN0JJ3OO2yjov2SOJ0EjKXjHA1w3yVDLc.jpg',
            'target_campains' => '1500000',
            'deskripsi' => 'kami dari tim robotik pens ingin membuat suatu product motor listrik tenaga surya dimana nantinya akan bermanfaat unuk banyak orang didunia, dengan itu kami ingin mengajukan campains bantuan ke website 3funding unutk mensukseskan product kami',
            'status_campains' => 'Open',
            'created_at' => now(),
            'start_date_camp' => now(),
            'end_date_camp' => '2023-11-16',
        ]);

        Campain::create([
            'user_id' => '5',
            'title_campains' => 'Sepeda Listrik Tenaga Surya',
            'banner_campains' => 'img-banner-campains/LwYEYu1iXT3KXbeW1kP0EyVNPuSQk6UJmgUDXlBY.jpg',
            'target_campains' => '2500000',
            'deskripsi' => 'kami dari tim robotik pens ingin membuat suatu product sepeda listrik tenaga surya dimana nantinya akan bermanfaat unuk banyak orang didunia, dengan itu kami ingin mengajukan campains bantuan ke website 3funding unutk mensukseskan product kami',
            'status_campains' => 'Open',
            'created_at' => now(),
            'start_date_camp' => now(),
            'end_date_camp' => '2023-11-16',
        ]);

        Campain::create([
            'user_id' => '6',
            'title_campains' => 'Sepeda Listrik Tenaga Batrai',
            'banner_campains' => 'img-banner-campains/HD8iRcwEfKNideIRTZKcXiMWe64PJh3zJ3e858nr.jpg',
            'target_campains' => '1500000',
            'deskripsi' => 'kami dari tim robotik pens ingin membuat suatu product sepeda listrik tenaga batrai dimana nantinya akan bermanfaat unuk banyak orang didunia, dengan itu kami ingin mengajukan campains bantuan ke website 3funding unutk mensukseskan product kami',
            'status_campains' => 'Open',
            'created_at' => now(),
            'start_date_camp' => now(),
            'end_date_camp' => '2023-11-16',
        ]);

        Campain::create([
            'user_id' => '7',
            'title_campains' => 'Aplikasi Pencegahan Pernikahan Dini',
            'banner_campains' => 'img-banner-campains/r45ZCuHClzM9PEDKAZGKrtrCUxo3Ugs6zXabr5MO.jpg',
            'target_campains' => '28500000',
            'deskripsi' => 'kami dari tim robotik ingin membuat suatu product aplikasi pencegahan pernikahan dini dimana nantinya akan bermanfaat unuk banyak orang didunia, dengan itu kami ingin mengajukan campains bantuan ke website 3funding unutk mensukseskan product kami',
            'status_campains' => 'Open',
            'created_at' => now(),
            'start_date_camp' => now(),
            'end_date_camp' => '2023-11-16',
        ]);

        Campain::create([
            'user_id' => '8',
            'title_campains' => 'Aplikasi Pencegahan Penyakit Berbahaya',
            'banner_campains' => 'img-banner-campains/RkY3dm4Iohd5ZTDb8AmPYiN2ALHuGmFDyr8imqBm.jpg',
            'target_campains' => '28500000',
            'deskripsi' => 'kami dari tim ingin membuat suatu product dimana nantinya akan bermanfaat unuk banyak orang didunia, dengan itu kami ingin mengajukan campains bantuan ke website 3funding unutk mensukseskan product kami',
            'status_campains' => 'Open',
            'created_at' => now(),
            'start_date_camp' => now(),
            'end_date_camp' => '2023-11-16',
        ]);

        Campain::create([
            'user_id' => '9',
            'title_campains' => 'Alat Pengawet Ikan Bertenaga Angin',
            'banner_campains' => 'img-banner-campains/K1IZRbgM4rdF1in82h8rOfImPH2Vx2qf6rm5QuIG.png',
            'target_campains' => '98500000',
            'deskripsi' => 'kami dari tim ingin membuat suatu product alat pengendali pengawetan ikan bertenaga angin dimana nantinya akan bermanfaat unuk banyak orang didunia, dengan itu kami ingin mengajukan campains bantuan ke website 3funding unutk mensukseskan product kami',
            'status_campains' => 'Open',
            'created_at' => now(),
            'start_date_camp' => now(),
            'end_date_camp' => '2023-11-16',
        ]);

        Campain::create([
            'user_id' => '10',
            'title_campains' => 'Aplikasi Konsultasi Psikologi',
            'banner_campains' => 'img-banner-campains/xanwYaG3twRr8UVczlXHaElbMy1DuvScNB918wds.jpg',
            'target_campains' => '10500000',
            'deskripsi' => 'kami dari tim ingin membuat suatu product dimana nantinya akan bermanfaat unuk banyak orang didunia, dengan itu kami ingin mengajukan campains bantuan ke website 3funding unutk mensukseskan product kami',
            'status_campains' => 'Open',
            'created_at' => now(),
            'start_date_camp' => now(),
            'end_date_camp' => '2023-11-16',
        ]);

        Campain::create([
            'user_id' => '11',
            'title_campains' => 'Aplikasi Konsultasi Psikologi Jiwa Berbasis Mobile',
            'banner_campains' => 'img-banner-campains/qKkSclAgKFd6jFhHtQvf9Q4brF8bWLpa0KJshagO.jpg',
            'target_campains' => '20000000',
            'deskripsi' => 'kami dari tim ingin membuat suatu product dimana nantinya akan bermanfaat unuk banyak orang didunia, dengan itu kami ingin mengajukan campains bantuan ke website 3funding unutk mensukseskan product kami',
            'status_campains' => 'Open',
            'created_at' => now(),
            'start_date_camp' => now(),
            'end_date_camp' => '2023-11-16',
        ]);

        Campain::create([
            'user_id' => '12',
            'title_campains' => 'Aplikasi Konsultasi Dokter',
            'banner_campains' => 'img-banner-campains/9qTM12sB5nmGDSLySn9wMHPvktmxldgUcgIMsSRE.jpg',
            'target_campains' => '20000000',
            'deskripsi' => 'kami dari tim ingin membuat suatu product dimana nantinya akan bermanfaat unuk banyak orang didunia, dengan itu kami ingin mengajukan campains bantuan ke website 3funding unutk mensukseskan product kami',
            'status_campains' => 'Open',
            'created_at' => now(),
            'start_date_camp' => now(),
            'end_date_camp' => '2023-11-16',
        ]);

        Campain::create([
            'user_id' => '13',
            'title_campains' => 'Aplikasi Konsultasi Agama',
            'banner_campains' => 'img-banner-campains/4J0uAUAVHtfSbHXRTSZtmeA2DVxL8x9A9mxMgQAm.jpg',
            'target_campains' => '20000000',
            'deskripsi' => 'kami dari tim ingin membuat suatu product dimana nantinya akan bermanfaat unuk banyak orang didunia, dengan itu kami ingin mengajukan campains bantuan ke website 3funding unutk mensukseskan product kami',
            'status_campains' => 'Open',
            'created_at' => now(),
            'start_date_camp' => now(),
            'end_date_camp' => '2023-11-16',
        ]);

        for ($campainId = 1; $campainId <= 10; $campainId++) {
            HistoryCampain::create([
                'campain_id' => $campainId,
                'nama_donatur' => 'Gede Hari Yoga Nanda',
                'nominal_donatur' => '100000',
                'payment_method' => 'BCA',
                'status_payment' => 'Success',
                'created_at' => now(),
            ]);
        }

        for ($campainId = 1; $campainId <= 10; $campainId++) {
            HistoryCampain::create([
                'campain_id' => $campainId,
                'nama_donatur' => 'Handaru Dwiki Yuntara',
                'nominal_donatur' => '290000',
                'payment_method' => 'Dana',
                'status_payment' => 'Success',
                'created_at' => now(),
            ]);
        }

        for ($campainId = 1; $campainId <= 5; $campainId++) {
            HistoryCampain::create([
                'campain_id' => $campainId,
                'nama_donatur' => 'M. Iqbal Rahmatullah',
                'nominal_donatur' => '390000',
                'payment_method' => 'Dana',
                'status_payment' => 'Success',
                'created_at' => now(),
            ]);
        }

        for ($campainId = 5; $campainId <= 10; $campainId++) {
            HistoryCampain::create([
                'campain_id' => $campainId,
                'nama_donatur' => 'M. Iqbal Rahmatullah',
                'nominal_donatur' => '900000',
                'payment_method' => 'Dana',
                'status_payment' => 'Success',
                'created_at' => now(),
            ]);
        }
    }
}
