<?= $this->extend('layout'); ?>

<?= $this->section('main')?>

<div class="container">
    <h3>Review dan Submit Order</h3>
    <hr/>
    <table>
        <tr>
            <td>Pulang</td>
            <td>@1</td>
            <td>Rp. 100.000</td>
        </tr>
    </table>
    <h3 class="mt-3">Total</h3>
    <hr />
    <span>Rp. 100.000</span>
    <h3 class="mt-3">Alamat pengiriman</h3>
    <hr/>
    <p>Jl Simp. Sungai Duren, mr. Jambi</p>
    <h3 class="mt-3">Metode Bayar</h3>
    <hr/>
    <p>Transfer Bayar</p>
    <p>No Rekening: Dina Komariah, BSI, 10003762</p>
    <div class="mt-5">
        <form action="<?= base_url('submit')?>" method="POST">
        <button type="submit" class="btn btn-success">Submit Order</button>
        </form>
    </div>
</div>

<?= $this->endSection();?>