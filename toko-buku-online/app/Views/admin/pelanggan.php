<?= $this->extend('admin/layout');?>

<?= $this->section('mainadmin') ?> 

<div class="content d-flex justify-content-center mt-5">
    <div>
        <h1 class="text-center">Data Pelanggan</h1>
        <table class="table table-bordered text-center">
            <thead class="thead-dark">
                <tr class="table-info">
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Dina</td>
                    <td>Dina_Kom</td>
                    <td>dinakomariah584@gmail.com</td>
                    <td>082280063642</td>
                    <td>Jl. Javana No. 09</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Revo</td>
                    <td>Revo_Mau</td>
                    <td>Saputra03@gmail.com</td>
                    <td>082281763108</td>
                    <td>Jl. Merpati No. 70</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Angela</td>
                    <td>njel_ycu</td>
                    <td>fortun@email.com</td>
                    <td>0812599704</td>
                    <td>Jl. Anggrek No. 67</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Diah</td>
                    <td>Diah_Novi</td>
                    <td>Diahh@yahoo.com</td>
                    <td>085794769708</td>
                    <td>Jl. Ampera No. 99</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>