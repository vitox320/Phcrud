function getCep(cep){

    let url = 'https://viacep.com.br/ws/'+cep+'/json/unicode/'
    let XmlHttp = new XMLHttpRequest
    XmlHttp.open('GET',url)

    XmlHttp.onreadystatechange = () =>{
        if(XmlHttp.readyState == 4 && XmlHttp.status == 200){
            let dadosJasonText = XmlHttp.responseText
            let dadosJasonObj = JSON.parse(dadosJasonText)
            document.querySelector('input#endereco').value = dadosJasonObj.logradouro 
            document.querySelector('input#bairro').value = dadosJasonObj.bairro  
            document.querySelector('input#cidade').value = dadosJasonObj.localidade
            document.querySelector('input#estado').value = dadosJasonObj.uf
        }
    }
    XmlHttp.send()
}