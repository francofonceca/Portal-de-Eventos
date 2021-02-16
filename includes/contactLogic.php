<?php
if (isset($errorContact)) {
    unset($variabke);
}elseif (isset($errorCompany)) {
    unset($errorCompany);
}elseif (isset($errorWork)) {
    unset($errorWork);
}
if (isset($_POST) && count($_POST) == 8 || (isset($_POST) && count($_POST) == 7 && isset($_POST['btnWork']))) {

    if (isset($_POST['btnContact'])) {
        $nameContact = isset($_POST['nameContact']) && (verify($_POST['nameContact']));
        $phoneContact = isset($_POST['phoneContact']) && (verify($_POST['phoneContact']));
        $reasonContact = isset($_POST['reasonContact']) && (verify($_POST['reasonContact']));
        $surnameContact = isset($_POST['surnameContact']) && (verify($_POST['surnameContact']));
        $emailContact = isset($_POST['emailContact']) && (verify($_POST['emailContact']));
        $howContact = isset($_POST['howContact']) && (verify($_POST['howContact']));
        $commentContact = isset($_POST['commentContact']) && (verify($_POST['commentContact']));
        if ($nameContact && $phoneContact && $reasonContact && $surnameContact && $emailContact && $howContact && $commentContact) {
            $nameContact = (clean($_POST['nameContact']));
            $phoneContact = (clean($_POST['phoneContact']));
            $reasonContact = (clean($_POST['reasonContact']));
            $surnameContact = (clean($_POST['surnameContact']));
            $emailContact = (clean($_POST['emailContact']));
            $howContact = (clean($_POST['howContact']));
            $commentContact = (clean($_POST['commentContact']));

            $columns = 'Name,Surname,Phone,Email,Reason,How,Comment';
            $values = "$nameContact,$surnameContact,$phoneContact,$emailContact,$reasonContact,$howContact,$commentContact";
            if (INSERT($tables['contact'],$columns,$values)) {
            }else{
                $error = "Error al enviar formulario, revise sus datos o contacte al técnico";
            }
        } elseif (!$nameContact) {
            $errorContact = "Falta el nombre";
        } elseif (!$phoneContact) {
            $errorContact = "Falta el teléfono";
        } elseif (!$reasonContact) {
            $errorContact = "Falta el motivo";
        } elseif (!$surnameContact) {
            $errorContact = "Falta el apellido";
        } elseif (!$emailContact) {
            $errorContact = "Falta la email de contacto";
        } elseif (!$howContact) {
            $errorContact = "Falta la razón de cómo nos conociste";
        } else {
            $errorContact = "Falta su comentario";
        }
        $nameContact = (clean($_POST['nameContact']));
        $phoneContact = (clean($_POST['phoneContact']));
        $reasonContact = (clean($_POST['reasonContact']));
        $surnameContact = (clean($_POST['surnameContact']));
        $emailContact = (clean($_POST['emailContact']));
        $howContact = (clean($_POST['howContact']));
        $commentContact = $_POST['commentContact'];
    }elseif (isset($_POST['btnWork'])) {
        $nameWork = isset($_POST['nameWork']) && (verify($_POST['nameWork']));
        $phoneWork = isset($_POST['phoneWork']) && (verify($_POST['phoneWork']));
        $reasonWork = isset($_POST['reasonWork']) && (verify($_POST['reasonWork']));
        $surnameWork = isset($_POST['surnameWork']) && (verify($_POST['surnameWork']));
        $emailWork = isset($_POST['emailWork']) && (verify($_POST['emailWork']));
        $cvWork = isset($_FILES['cvWork']) && count($_FILES['cvWork'])==5 && $_FILES['cvWork']["type"] == "application/pdf";
        $commentWork = isset($_POST['commentWork']) && (verify($_POST['commentWork']));
        if ($nameWork && $phoneWork && $reasonWork && $surnameWork && $emailWork && $cvWork && $commentWork) {
            $nameWork = (clean($_POST['nameWork']));
            $phoneWork = (clean($_POST['phoneWork']));
            $reasonWork = (clean($_POST['reasonWork']));
            $surnameWork = (clean($_POST['surnameWork']));
            $emailWork = (clean($_POST['emailWork']));
            $cvWork = $_FILES['cvWork'];
            $commentWork = (clean($_POST['commentWork']));

            if (!is_dir("files")) {
                mkdir("files", 0777);
            }
            $fileName = $cvWork["name"];
            move_uploaded_file($cvWork["tmp_name"], "files/".$fileName);
    
            
            $columns = 'Name,Surname,Phone,Email,Reason,FileName,Comment';
            $values = "$nameWork,$surnameWork,$phoneWork,$emailWork,$reasonWork,$fileName,$commentWork";
            if (INSERT($tables['contact'],$columns,$values)) {
            }else{
                $error = "Error al enviar formulario, revise sus datos o contacte al técnico";
            }
        } elseif (!$nameWork) {
            $errorWork = "Falta el nombre";
        } elseif (!$phoneWork) {
            $errorWork = "Falta el teléfono";
        } elseif (!$reasonWork) {
            $errorWork = "Falta el motivo";
        } elseif (!$surnameWork) {
            $errorWork = "Falta el apellido";
        } elseif (!$emailWork) {
            $errorWork = "Falta la email de contacto";
        } elseif (!$cvWork) {
            $errorWork = "Falta su CV en formato PDF";
        } else {
            $errorWork = "Falta su comentario";
        }
        $nameWork = (clean($_POST['nameWork']));
        $phoneWork = (clean($_POST['phoneWork']));
        $reasonWork = (clean($_POST['reasonWork']));
        $surnameWork = (clean($_POST['surnameWork']));
        $emailWork = (clean($_POST['emailWork']));
        $commentWork = $_POST['commentWork'];
    }elseif (isset($_POST['btnCompany'])) {
        $nameCompany = isset($_POST['nameCompany']) && (verify($_POST['nameCompany']));
        $phoneCompany = isset($_POST['phoneCompany']) && (verify($_POST['phoneCompany']));
        $reasonCompany = isset($_POST['reasonCompany']) && (verify($_POST['reasonCompany']));
        $companyCompany = isset($_POST['companyCompany']) && (verify($_POST['companyCompany']));
        $emailCompany = isset($_POST['emailCompany']) && (verify($_POST['emailCompany']));
        $entryCompany = isset($_POST['entryCompany']) && (verify($_POST['entryCompany']));
        $commentCompany = isset($_POST['commentCompany']) && (verify($_POST['commentCompany']));

        if ($nameCompany && $phoneCompany && $reasonCompany && $companyCompany && $emailCompany && $entryCompany && $commentCompany) {
            $nameCompany = (clean($_POST['nameCompany']));
            $phoneCompany = (clean($_POST['phoneCompany']));
            $reasonCompany = (clean($_POST['reasonCompany']));
            $companyCompany = (clean($_POST['companyCompany']));
            $emailCompany = (clean($_POST['emailCompany']));
            $entryCompany = (clean($_POST['entryCompany']));
            $commentCompany = (clean($_POST['commentCompany']));
            
            $columns = 'Name,Company,Phone,Email,Reason,Entry,Comment';
            $values = "$nameCompany,$companyCompany,$phoneCompany,$emailCompany,$reasonCompany,$entryCompany,$commentCompany";
            if (INSERT($tables['company'],$columns,$values)) {
            }else{
                $errorCompany = "Error al enviar formulario, revise sus datos o contacte al técnico";
            }
        } elseif (!$nameCompany) {
            $errorCompany = "Falta el nombre";
        } elseif (!$phoneCompany) {
            $errorCompany = "Falta el teléfono";
        } elseif (!$reasonCompany) {
            $errorCompany = "Falta su razón social";
        } elseif (!$companyCompany) {
            $errorCompany = "Falta el nombre de su empresa";
        } elseif (!$emailCompany) {
            $errorCompany = "Falta la email de contacto";
        } elseif (!$entryCompany) {
            $errorCompany = "Falta la rubro";
        } else {
            $errorCompany = "Falta su comentario";
        }
        $nameCompany = (clean($_POST['nameCompany']));
        $phoneCompany = (clean($_POST['phoneCompany']));
        $reasonCompany = (clean($_POST['reasonCompany']));
        $companyCompany = (clean($_POST['companyCompany']));
        $emailCompany = (clean($_POST['emailCompany']));
        $entryCompany = (clean($_POST['entryCompany']));
        $commentCompany = $_POST['commentCompany'];
    }
}
?>