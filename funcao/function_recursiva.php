<?php

$hieraquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            //inicio: Diretor Comercial
             array(
                'nome_cargo'=>'Diretor Comercial',
                 'subordinados'=>array(
                     //inicio: Gerente de vendas
                     array(
                         'nome_cargo'=>'Gerente de vendas'
                     )
                     //Termino: Gerente de vendas
                   
                 )
            ),
            //Terminio: Diretor Comercial
            //inicio: Diretor fincanceiro
            array(
                'nome_cargo'=>'Diretor Financeiro',
                 'subordinados'=>array(
                     //inicio: Gerente contas a pagar
                     array(
                         'nome_cargo'=>'Gerente de contas a pagar',
                         'subordinados'=>array(
                             //inicio: Supervisor de Pagamentos
                             array(
                                 'nome_cargo'=>'Supervisor de Pagamentos'
                             )
                             //termnio: Supervisor de Pagamentos
                         )
                  
                    ),
                     //Termino: Gerente contas a pagar
                     //inicio: Gerente de compras
                     array(
                         'nome_cargo'=>'Gerente de compras',
                         'subordinados'=>array(
                             //inicio: Supervisor de suplementos
                             array(
                                'nome_cargo'=>'Supervisor de Suprimentos'
                             )
                             //Termino: Supervisor de suplementos
                         )
                     )
                      //Termino: Gerente de compras

            )
            //Terminio: Diretor finaceiro
        )
        ) 
     )
);

function exibe($cargos){
    $html = '<ul>';
    foreach ($cargos as  $cargo){

        $html .= '<li>';
        $html .= $cargo['nome_cargo'];
        if(isset($cargo['subordinados'])&& count($cargo['subordinados']) > 0){
                 
             $html .= exibe($cargo['subordinados']);
        }
        $html .= '</li>';
    }
 
    $html .= '</ul>';

    return $html;
}

echo exibe($hieraquia);

?>