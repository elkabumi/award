

                           <form role="form"  action="<?=$action_t_form?>" method="post">

                            <div class="box box-danger">
                                <div class="box-body">
                                    
                                        <!-- text input -->
                                         <div class="form-group">
                                     <div class="col-md-12">
                                            <label> Code Travel Request</label>
                                            <input  type="text" name="i_name" class="form-control" placeholder="Enter ..." value="<?= $row_travel->travel_request_code ?>" />
                                        </div>
                                        </div>
                                   
						<input class="btn btn-danger" type="submit" value="Save"/>
                        </div>
                        </div>
                        </form>