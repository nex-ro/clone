
<div class="container-md p-2">
    <form method="POST" enctype="multipart/form-data" action="index.php?page=editDataMhs">
        <input hidden value="<?=$data['nim']?>" type="number" name="oldNIM" class="form-control mb-3"  required placeholder="oldNIM">
        <input  type="number" name="nim" class="form-control mb-3" value="<?=$data['nim']?>"  required placeholder="NIM">

        <input value="<?=$data['nama']?>" type="text" name="nama" class="form-control mb-3" required placeholder="Nama Lengkap">
        <select class="form-select form-control mb-3" aria-label="Default select example" name="prodi" required> 
            <option selected value="<?=$data['prodi']?>"><?=$data['prodi']?></option>
            <option value="Teknik Informatika">Teknik Informatika</option>

            <option value="Sistem Informasi">Sistem Informasi</option>
        </select>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>