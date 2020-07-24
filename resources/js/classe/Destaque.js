export default class Destaque{
    constructor(){
        //super();
        this.token = $("meta[name='csrf-token']").attr('content');
    }

    inserir(data){
        /*html*/
            let form = `
            <form method="post" action="/destaque/salvar" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="${this.token}"/>
                <input type="hidden" name="id_personagem" value="${data}"/>
            <div class="form-group">
                <label for="nome">Nome do Tema de Destaque</label>
                <input type="text" class="form-control" id="nome" name="nome"/>
            </div>
            <div class="form-group">
                <label for="cor_primaria">Cor de destaque</label>
                <input type="color" class="form-control" id="cor_primaria" name="cor_primaria"/>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="background" name="background">
                <label class="custom-file-label" for="background" >Image de Fundo</label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
            </form>
            `;
    
            return form;
    }

    mudar(dados){
        let options = "";
        dados.forEach(dado => {
            options += `<option value="${dado.id}">${dado.nome}</option>`;
        });
        /*html*/
        let form = `
        <form method="post" action="/jogo/salvar">
            <input type="hidden" name="_token" value="${this.token}"/>
            <div class="form-group">
            <label for="id_destaque">Example select</label>
            <select class="form-control" id="id_destaque" name="id_destaque">
              <option value="">Selecionar Destaque</option>
              ${options}
            </select>
          </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
        </form>
        `;

        return form;
    }
}