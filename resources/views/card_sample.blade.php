{{-- Exemplo de estrutura de um CARD:

CARD pensado para 2 colunas em CELULAR (col-6) e 4 colunas a partir de tela tamanho Small (col-sm-3)

Comentários:
h3 - Tamanho padrão dos títulos dos cards do painel

mb-0 no Title - Zera a margem inferior do título do Header

border-top no card-body - Faz a separação entre o header e o corpo do cartão

mb-2 na row - Reduz para 50% o espaçamento inferior (margin-bottom) da linha - Usar APENAS em card com múltiplas linhas de informação,
    como os card de detalhe de cobrança, detalhe de evento, etc...

card-body-spaced - Usado para situações onde o espaçamento dentre as linhas do card deve ser MAIOR (line-height: 1.5rem)

--}}

<div class="card">
	<div class="card-header">
		<h3 class="card-title mb-0"><i class="mdi mdi-credit-card"></i>
			Cobrança XXXXX
		</h3>
	</div>

	<div class="card-body border-top collapse show no-wrap" >
		<dl class="row mb-2">
            <div class="col-6 col-sm-3">
                <div class="row">
                    <div class="col-12 text-themecolor">Label 1</div>
                    <div class="col-12">Conteúdo 1</div>
                </div>
            </div>
            <div class="col-6 col-sm-3">
                <div class="row">
                    <div class="col-12 text-themecolor">Label 2</div>
                    <div class="col-12">Conteúco 2</div>
                </div>
            </div>
		</dl>
	</div>

	<div class="card-body-spaced border-top collapse show no-wrap" >
		<dl class="row mb-2">
            <div class="col-6 col-sm-3">
                <div class="row">
                    <div class="col-12 text-themecolor">Label 3</div>
                    <div class="col-12">Conteúdo 3</div>
                </div>
            </div>
            <div class="col-6 col-sm-3">
                <div class="row">
                    <div class="col-12 text-themecolor">Label 4</div>
                    <div class="col-12">Conteúco 4</div>
                </div>
            </div>
		</dl>
	</div>
</div>

{{-- Exemplo do uso de ALERTAS

alert-info - Apenas informação pertinente, mas sem grande importância
alert-warning - Já merece ser lido, mas não é imprescindível
alert-danger - Se o usuário não ler a coisa PEGA   :-)

O lay-out abaixo foi pensado para APENAS uma linha de alerta, então a frase não deve ser muito longa!

Onde colocar? Primeiro BLOCO de informação no CORPO do cartão

--}}
<div class="card-body-spaced border-top collapse show no-wrap" >
    <div class="row">
        <div class="col-12">
            <div class="alert alert-info">
                <i class="fa fa-exclamation-triangle"></i><strong> Atenção!</strong>
                    Você pode inserir um novo histórico a qualquer momento
            </div>
        .....
        </div>
    </div>
</div>
