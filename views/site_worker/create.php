<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/site/worker/index">Список сотрудников</a></li>
                    <li class="active">Добавление сотрудника</li>
                </ol>
            </div>

            <h2 class="title text-center">Добавить нового сотрудника</h2>
            <br/>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="col-sm-4 col-sm-offset-4 padding-right">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <table>

                            <tr>
                                <td> <p>Имя</p></td>
                                <td><p>Возраст</p></td>
                                <td><p>Заработная плата, $</p></td>
                            </tr>

                            <tr>
                                <td><input type="text" name="name" placeholder="" value=""></td>
                                <td><input type="text" name="age" placeholder="" value=""></td>
                                <td><input type="text" name="salary" placeholder="" value=""></td>
                            </tr>

                        </table>

                        <br/><br/>

                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">

                        <br/><br/>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>

