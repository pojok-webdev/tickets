<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Settings</h3>
    </div>
    <div class="modal-body">
        <p>Here settings can be configured...</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
    </div>
</div>
<style>
    .box-content .control-group .control-label{
        color:black;
    }
    .box-content .control-group input.span4{
        border: 1px solid black;
    }
</style>
<div class="modal hide fade" id="mdl-add">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Penambahan Ticket</h3>
    </div>
    <div class="modal-body">
        <div class="row-fluid">
            <div class="box black span6" onTablet="span6" onDesktop="span6">
                <div class="box-header">
                    <h2><i class="halflings-icon white user"></i>
                        <span class="break"></span>Pelanggan
                    </h2>
                </div>
                <div class="box-content">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">Nama </label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="autocomp" data-provide="typeahead" data-items="4" placeholder="Nama Pelanggan">
                            </div>
                        </div>                
                        <div class="control-group">
                            <label class="control-label">Site </label>
                            <div class="controls">
                            <select class="span6" id="site">
                                <option val=1>PadiNET</option>
                            </select>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div><!--/span-->
    
            <div class="box black span6" onTablet="span6" onDesktop="span6">
                <div class="box-header">
                    <h2><i class="halflings-icon white list"></i><span class="break"></span>Keluhan</h2>
                </div>
                <div class="box-content">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">Keluhan </label>
                            <div class="controls">
                            <input type="text" class="span6" placeholder="Keluhan">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Pelapor </label>
                            <div class="controls">
                            <input type="text" class="span6" placeholder="Nama Pelapor">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Telepon </label>
                            <div class="controls">
                            <input type="text" class="span6" placeholder="No Telp Pelapor">
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Close</a>
            <a href="#" class="btn btn-primary">Save changes</a>
        </div>
    </div>
</div>