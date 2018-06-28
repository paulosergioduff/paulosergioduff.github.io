							<?php 
							$empresa = $_POST['empresa']; // empresa, cnpj, ramo, solicitante, telefone, email, endereco, bairro, cidade, ref
							$cnpj = $_POST['cnpj'];
							$ramo = $_POST['ramo'];
							$solicitante = $_POST['solicitante'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$ref = $_POST['ref'];
								 $login = $_POST['login'];
								 $senha = MD5($_POST['senha']);
								 $connect = mysql_connect('localhost','root','usbw');
								 $db = mysql_select_db('empresas');
								 $query_select = "SELECT login FROM usuarios WHERE login = '$login'";
								 $select = mysql_query($query_select,$connect);
								 $array = mysql_fetch_array($select);
								 $logarray = $array['login'];
								 if($login == "" || $login == null)
								 {
									echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
								 }
								 else
								 {
									if($logarray == $login)
									{
										echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
										die();
									}
									else 
									{
									    $query = "INSERT INTO usuarios (login,senha, empresa, cnpj, ramo, solicitante, telefone, email, endereco, bairro, cidade, ref) VALUES ('$login','$senha', '$empresa', '$cnpj', '$ramo', '$solicitante', '$telefone', '$email', '$endereco', '$bairro', '$cidade', '$ref')";
									    $insert = mysql_query($query,$connect);
										if($insert)
										{
											echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
										}
										else
										{
											echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
										}
									}
								 }
							?>