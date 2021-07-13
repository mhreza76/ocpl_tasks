@extends('admin.master')

@section('main-content')

    <sectiion>
        <div class="container">
            <h1 class="text-center mb-4"> Employee List</h1>
            <div class="row">
                <div class="col-sm-12">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(isset($datas) && count($datas) > 0){
                        $i = 0;
                        foreach ($datas as $key => $data) {
                        ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $data['contact_name']; ?></td>
                            <td><?= $data['contact_phone']; ?></td>
                            <td><?= $data['contact_email']; ?></td>
                            <td><?= $data['contact_address']; ?></td>
                            <td><a href="show.php? user_position=<?= $key ?>" style="text-decoration: none;">Show</a> |
                                <a href="edit.php? user_position=<?= $key ?>" style="text-decoration: none;">Edit</a> |
                                <a href="delete.php?user_position=<?= $key ?>" style="text-decoration: none;">Delete</a>
                            </td>
                        </tr>
                        <?php
                        }
                        }else{
                        ?>
                        <tr>
                            <td colspan="3">No data is Available.</td>
                        </tr>
                        <?php
                        }
                        ?>

                        </tbody>
                    </table>

                    <div class="div">
                        <a href="create.php">Create New.</a>
                    </div>
                </div>
            </div>
        </div>
    </sectiion>
@endsection
