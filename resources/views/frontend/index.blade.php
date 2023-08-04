<ion-list>
    <div ng-repeat="group in groups">
      <ion-item class="item-stable"
                ng-click="toggleGroup(group)"
                ng-class="{active: isGroupShown(group)}">
          <i class="icon" ng-class="isGroupShown(group) ? 'ion-minus' : 'ion-plus'"></i>
        &nbsp;
      
      </ion-item>
      <ion-item class="item-accordion"
                ng-repeat="item in group.items"
                ng-show="isGroupShown(group)">

      </ion-item>
    </div>
  </ion-list>
