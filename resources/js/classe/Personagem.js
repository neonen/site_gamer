export default class Personagem{
    constructor(){
        //super();
        this.token = $("meta[name='csrf-token']").attr('content');
    }
    listar(){}
    inserir(){
        /*html*/
            let form = `
            <form method="post" action="/personagem/salvar" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="${this.token}"/>
            <div class="form-group">
                <label for="nome">Nome do Personagem</label>
                <input type="text" class="form-control" id="nome" name="nome"/>
            </div>
            <div class="form-group">
                <label for="frase">Frase do Personagem</label>
                <input type="text" class="form-control" id="frase" name="frase"/>
            </div>
            <div class="form-group">
                <label for="texto">Texto de Apresentação</label>
                <textarea class="form-control" id="texto" name="texto"></textarea>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="personagem" name="personagem">
                <label class="custom-file-label" for="personagem" >Image do personagem</label>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="card" name="card">
                <label class="custom-file-label" for="card" >Image do card</label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
            </form>
            `;
    
            return form;
    }
    editar(dado){
        /*html*/
            let form = `
            <form method="post" action="/personagem/editar" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="${this.token}"/>
                <input type="hidden" name="id" value="${dado.id}"/>
            <div class="form-group">
                <label for="nome">Nome do Personagem</label>
                <input type="text" class="form-control" id="nome" name="nome" value="${dado.nome}"/>
            </div>
            <div class="form-group">
                <label for="frase">Frase do Personagem</label>
                <input type="text" class="form-control" id="frase" name="frase" value="${dado.frase}"/>
            </div>
            <div class="form-group">
                <label for="texto">Texto de Apresentação</label>
                <textarea class="form-control" id="texto" name="texto">${dado.texto}</textarea>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="personagem" name="personagem">
                <label class="custom-file-label" for="personagem" >Image do personagem</label>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="card" name="card">
                <label class="custom-file-label" for="card" >Image do card</label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
            </form>
            `;
    
            return form;
        }
    excluir(){}
    buscar(){}
}