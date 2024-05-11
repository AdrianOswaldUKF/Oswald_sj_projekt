<h2>Kontakty</h2>
<hr>
                <?php
                    $contact_object = new Contact();
                    $contacts = $contact_object->select();

                    if(isset($_POST['delete_contact'])){
                        $contact_id = $_POST['delete_contact'];
                        $contact_object->delete($contact_id);
                        header('Location: ADMIN.php');
                        die();
                    }

                    echo '<table class="table table-dark table-bordered table-fit text-white">';
                    echo '<tr><th>Meno</th>
                              <th>Email</th>
                              <th>Správa</th>
                              <th>Súhlas</th>
                              <th>Vymazať</th>
                              <th>Editovať</th>
                          </tr>';
                    foreach($contacts as $c){
                        echo '<tr>';
                        echo '<td>'.$c->name;'</td>';
                        echo '<td>'.$c->email;'</td>';
                        echo '<td>'.$c->message;'</td>';
                        echo '<td>'.$c->acceptance;'</td>';
                        echo '<td>
                                <form action="" method="POST">
                                    <button type="submit" class="btn btn-danger" name="delete_contact" value="'.$c->id.'"'.'>Vymazať</button>
                                </form>
                              </td>';
                        echo '<td>
                                <form action="KONTAKT-UPRAVA.php" method="POST">
                                  <button type="submit" class="btn btn-success" name="edit_contact" value="'.$c->id.'"'.'>Editovať</button>
                                </form>  
                             </td>';
                        echo '</tr>';
                    }
                    
                    echo '</table>';
                ?>