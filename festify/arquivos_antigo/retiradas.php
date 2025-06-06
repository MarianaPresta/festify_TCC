<?php require "./components/header.php"; ?>
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-end">
           <a href="./dashboard.php" class="btn btn-dark btn-sm">Voltar</a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
        
            <form action="./cadastrarmesa" method="post" enctype="multipart/form-data">
                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nmesa" placeholder="nmesa">
                <label for="floatingInput">Número da Mesa</label>
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
                <th>Número da Mesa</th>
                <th>Ação</th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mesa nº - 12</td>
                    <td>

                        <a href="deletarproduto?id=1" class="btn btn-danger btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                        </svg>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Mesa nº - 1 (caixa)</td>
                    <td>

                        <a href="deletarproduto?id=1" class="btn btn-danger btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                        </svg>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Mesa nº - 12</td>
                    <td>

                        <a href="deletarproduto.php?id=1" class="btn btn-danger btn-sm">
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