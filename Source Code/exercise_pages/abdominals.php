<div ng-controller="Abdominal as exercise">
<!--<p ng-repeat="product in exercise.products"></p> -->
<div class="row">
    <img class="col-sm-6 col-md-3" src="http://assets.bodybuilding.com/images/trackers/exercise/heatmap/13.gif" alt="Abdominal" style="float:left;height:360px;" />
    <div class="col-sm-6 col-md-3" ng-repeat="product in exercise.products | orderBy:'name'">
        <div class="thumbnail">
            <img src="{{product.image}}" alt="{{product.name}}">
            <div class="caption">
                <h4>{{product.name}}</h4>
                <center><!-- Modal Trigger --><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" data-name="{{product.name}}"  data-description="{{product.description}}" data-video="{{product.video}}">Watch Video</button></center>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="document.getElementById('modalVideo').pause(); document.getElementById('modalVideo').currentTime = 0;"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">{{product.name}}</h4>
                        </div>
                        <div class="modal-body">
                            <!-- <p id="modalDescription">{{product.description}}</p> -->
                            <center><video id="modalVideo" controls></video></center>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="document.getElementById('modalVideo').pause(); document.getElementById('modalVideo').currentTime = 0;">Close</button>
                        </div>
                    </div>
                </div>
            </div><!-- END Modal -->

        </div>
    </div>
</div></div>