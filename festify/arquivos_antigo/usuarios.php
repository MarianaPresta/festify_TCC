<?php require "./components/header.php"; ?>
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-end">
           <a href="./dashboard.php" class="btn btn-dark btn-sm">Voltar</a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
        
            <form action="./cadastrarajudante.php" method="post" enctype="multipart/form-data">
                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo">
                <label for="floatingInput">Nome Completo</label>
                </div>
                
                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="email" name="email" placeholder="e-mail">
                <label for="floatingInput">E-mail</label>
                </div>

                <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected>Escolha...</option>
                    <option value="1">1 - Administrador</option>
                    <option value="2">2 - Ajudante</option>
                    
                </select>
  <label for="floatingSelect">Escolher o nível de usuário</label>
                </div>

    
                <div class="mb-3 d-flex justify-content-end">
                <button type="reset" class="btn btn-light">Limpar</button>
                <button type="submit" class="btn btn-primary ms-1">Salvar</button>

                </div>

            </form>

        </div>

        <div class="col-md-8">
        <table class="table table-striped" id="tabela_produtos">
            <thead>
                <th>#</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Código</th>
                <th>Nível</th>
                <th>Ação</th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        Leandro Moreira
                    </td>
                    <td>leandro.moreira07@gmail.com</td>
                    <td>AB42S</td>
                    <td>Admin</td>
                    <td>
                        <a href="updateusuario.php?id=1" class="btn btn-warning btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg>
                        </a>

                        <a href="deletarusuario.php?id=1" class="btn btn-danger btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                        </svg>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        Rafaela Candido
                    </td>
                    <td>rafaela07@gmail.com</td>
                    <td>AB45S</td>
                    <td>Ajudante</td>
                    <td>
                        <a href="updateusuario.php?id=1" class="btn btn-warning btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg>
                        </a>

                        <a href="deletarusuario.php?id=1" class="btn btn-danger btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                        </svg>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        Cláudia Antunes Maia
                    </td>
                    <td>claudinha@gmail.com</td>
                    <td>XV4FD</td>
                    <td>Ajudante</td>
                    <td>
                        <a href="updateusuario.php?id=1" class="btn btn-warning btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg>
                        </a>

                        <a href="deletarusuario.php?id=1" class="btn btn-danger btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                        </svg>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>






<?php require "./components/footer.php"; ?>