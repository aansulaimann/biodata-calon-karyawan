<div class="container">
    <div class="row mt-4">
        <div class="col">
           <ul class="list-group">
                <li class="list-group-item bg-light">Detail Register User</li>
                <li class="list-group-item">
                    <label for="id" class="font-weight-bold">ID User : </label>
                    <?php echo $detail[0]['id']; ?>
                </li>
                <li class="list-group-item">
                    <label for="id" class="font-weight-bold">Username : </label>
                    <?php echo $detail[0]['username']; ?>
                </li>
                <li class="list-group-item">
                    <label for="id" class="font-weight-bold">Time Regist : </label>
                    <?php echo date('d F Y', strtotime($detail[0]['time'])); ?>
                </li>
                <li class="list-group-item">
                    <button type="button" onclick="window.close();" class="btn btn-primary px-4">Back</button>
                </li>
            </ul>
        </div>
    </div>
</div>