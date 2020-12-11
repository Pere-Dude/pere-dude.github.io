<?php require '../main/header.php';

include '../../php/form_certificate.php';
?>


 
<section class="reference-info">
    <div class="container">
        <h2>Справка об обучении</h2>

        <p class="text">Закажите справку об обучении, указав свои данные. Справка будет готова на следующий день в 44 кабинете.</p>


        <form class="ref-form"> 
            
            <label for="name" class="one">Имя: </label><br>
            <input type="text" class="name input-text" name="name" placeholder="Введите имя" required><br>
            
            <label for="surname" class="one">Фамилия: </label><br>
            <input type="text" class="surname input-text" name="surname" placeholder="Введите фамилию" required><br>
            
            <label for="patronymic" class="one">Отчество: </label><br>
            <input type="text" class="patronymic input-text" name="patronymic" placeholder="Введите отчество" required><br>

            <label for="group" class="two">Группа: </label><br>
            <input type="text" class="group" name="group" placeholder="Название группы" required><br>

            <label for="count" class="two">Количество справок: </label><br>
            <input type="number" class="count" name="count" min="1" max="5" required><br> 

            <input type="submit" id="submit" class="submit-button">
        </form>

    </div>
</section>











<?php require '../main/footer.php';    ?>