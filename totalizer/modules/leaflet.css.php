<style>
    /******
    * Leaflet
    */
    div#du-body.du-body #du-map-holder {
        position: relative;
        z-index: 1;
        width: 96%;
        margin: 0 auto;
    }

    div#du-body.du-body #du-map-holder.du-full-screen {
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    div#du-body.du-body #du-map-holder.du-full-screen #du-map {
        height: 100%;
        border: 0 none;
    }

    div#du-body.du-body #du-map {
        position: relative;
        z-index: 1;
        border: 2px solid <?php echo $widgetOptions["colors"]["main"]; ?>;
        background: <?php echo $widgetOptions["colors"]["map-bg"]; ?>;
        height: 500px;
    }

    /* required styles */
    div#du-body.du-body .leaflet-zoom-box {
        width: 0;
        height: 0;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    div#du-body.du-body .leaflet-vml-shape {
        width: 1px;
        height: 1px;
    }

    div#du-body.du-body .lvml {
        display: inline-block;
    }

    div#du-body.du-body .leaflet-top .leaflet-control {
        margin-top: 10px;
    }

    div#du-body.du-body .leaflet-bottom .leaflet-control {
        margin-bottom: 10px;
    }

    div#du-body.du-body .leaflet-left .leaflet-control {
        margin-left: 10px;
    }

    div#du-body.du-body .leaflet-right .leaflet-control {
        margin-right: 10px;
    }

    div#du-body.du-body .leaflet-container a {
        color: #0078A8;
    }

    div#du-body.du-body .leaflet-zoom-box {
        border: 2px dotted #38f;
    }

    /* general typography */
    div#du-body.du-body .leaflet-container {
        font: 12px/1.5 "Helvetica Neue", Arial, Helvetica, sans-serif;
    }

    div#du-body.du-body .leaflet-bar a,
    div#du-body.du-body .leaflet-bar a:hover {
        border-bottom: 1px solid #ccc;
        line-height: 26px;
        color: black;
    }

    div#du-body.du-body .leaflet-bar a:last-child {
        border-bottom: none;
    }

    div#du-body.du-body .leaflet-bar a.leaflet-disabled {
        color: #bbb;
    }

    div#du-body.du-body .leaflet-touch .leaflet-bar a {
        line-height: 30px;
    }

    div#du-body.du-body .leaflet-control-zoom-in,
    div#du-body.du-body .leaflet-control-zoom-out {
        font: bold 18px 'Lucida Console', Monaco, monospace;
    }

    div#du-body.du-body .leaflet-control-zoom-out {
        font-size: 20px;
    }

    div#du-body.du-body .leaflet-touch .leaflet-control-zoom-in {
        font-size: 22px;
    }

    div#du-body.du-body .leaflet-touch .leaflet-control-zoom-out {
        font-size: 24px;
    }

    div#du-body.du-body .leaflet-control-layers-expanded {
        padding: 6px 10px 6px 6px;
        color: #333;
    }

    div#du-body.du-body .leaflet-control-layers-scrollbar {
        padding-right: 5px;
    }

    div#du-body.du-body .leaflet-control-layers-selector {
        margin-top: 2px;
    }

    div#du-body.du-body .leaflet-control-layers-separator {
        border-top: 1px solid #ddd;
        margin: 5px -10px 5px -6px;
    }

    div#du-body.du-body .leaflet-container .leaflet-control-attribution {
        margin: 0;
    }

    div#du-body.du-body .leaflet-control-attribution,
    div#du-body.du-body .leaflet-control-scale-line {
        padding: 0 5px;
        color: #333;
    }

    div#du-body.du-body .leaflet-container .leaflet-control-attribution,
    div#du-body.du-body .leaflet-container .leaflet-control-scale {
        font-size: 11px;
    }

    div#du-body.du-body .leaflet-left .leaflet-control-scale {
        margin-left: 5px;
    }

    div#du-body.du-body .leaflet-bottom .leaflet-control-scale {
        margin-bottom: 5px;
    }

    div#du-body.du-body .leaflet-control-scale-line {
        border: 2px solid #777;
        border-top: none;
        line-height: 1.1;
        padding: 2px 5px 1px;
        font-size: 11px;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    div#du-body.du-body .leaflet-control-scale-line:not(:first-child) {
        border-top: 2px solid #777;
        border-bottom: none;
        margin-top: -2px;
    }

    div#du-body.du-body .leaflet-control-scale-line:not(:first-child):not(:last-child) {
        border-bottom: 2px solid #777;
    }

    div#du-body.du-body .leaflet-touch .leaflet-control-layers,
    div#du-body.du-body .leaflet-touch .leaflet-bar {
        border: 2px solid rgba(0, 0, 0, 0.2);
    }

    div#du-body.du-body .leaflet-popup {
        margin-bottom: 20px;
    }

    div#du-body.du-body .leaflet-popup-content-wrapper {
        padding: 1px;
        text-align: left;
    }

    div#du-body.du-body .leaflet-popup-content {
        margin: 13px 19px;
        line-height: 1.4;
    }

    div#du-body.du-body .leaflet-popup-content p {
        margin: 18px 0;
    }

    div#du-body.du-body .leaflet-popup-tip-container {
        margin-left: -20px;
    }

    div#du-body.du-body .leaflet-popup-tip {
        padding: 1px;
        margin: -10px auto 0;
    }

    div#du-body.du-body .leaflet-popup-content-wrapper,
    div#du-body.du-body .leaflet-popup-tip {
        color: #333;
    }

    div#du-body.du-body .leaflet-container a.leaflet-popup-close-button {
        padding: 4px 4px 0 0;
        border: none;
        font: 16px/14px Tahoma, Verdana, sans-serif;
        color: #c3c3c3;
    }

    div#du-body.du-body .leaflet-container a.leaflet-popup-close-button:hover {
        color: #999;
    }

    div#du-body.du-body .leaflet-popup-scrolled {
        border-bottom: 1px solid #ddd;
        border-top: 1px solid #ddd;
    }

    div#du-body.du-body .leaflet-oldie .leaflet-popup-tip {
        margin: 0 auto;
    }

    div#du-body.du-body .leaflet-oldie .leaflet-popup-tip-container {
        margin-top: -1px;
    }

    div#du-body.du-body .leaflet-oldie .leaflet-control-zoom,
    div#du-body.du-body .leaflet-oldie .leaflet-control-layers,
    div#du-body.du-body .leaflet-oldie .leaflet-popup-content-wrapper,
    div#du-body.du-body .leaflet-oldie .leaflet-popup-tip {
        border: 1px solid #999;
    }

    div#du-body.du-body .leaflet-div-icon {
        border: 1px solid #666;
    }

    div#du-body.du-body .leaflet-tooltip {
        padding: 6px;
        border: 1px solid #fff;
        border-radius: 3px;
        color: #222;
    }

    div#du-body.du-body .leaflet-tooltip-top:before,
    div#du-body.du-body .leaflet-tooltip-bottom:before,
    div#du-body.du-body .leaflet-tooltip-left:before,
    div#du-body.du-body .leaflet-tooltip-right:before {
        border: 6px solid transparent;
    }

    div#du-body.du-body .leaflet-tooltip-bottom {
        margin-top: 6px;
    }

    div#du-body.du-body .leaflet-tooltip-top {
        margin-top: -6px;
    }

    div#du-body.du-body .leaflet-tooltip-bottom:before,
    div#du-body.du-body .leaflet-tooltip-top:before {
        margin-left: -6px;
    }

    div#du-body.du-body .leaflet-tooltip-top:before {
        margin-bottom: -12px;
        border-top-color: #fff;
    }

    div#du-body.du-body .leaflet-tooltip-bottom:before {
        margin-top: -12px;
        margin-left: -6px;
        border-bottom-color: #fff;
    }

    div#du-body.du-body .leaflet-tooltip-left {
        margin-left: -6px;
    }

    div#du-body.du-body .leaflet-tooltip-right {
        margin-left: 6px;
    }

    div#du-body.du-body .leaflet-tooltip-left:before,
    div#du-body.du-body .leaflet-tooltip-right:before {
        margin-top: -6px;
    }

    div#du-body.du-body .leaflet-tooltip-left:before {
        margin-right: -12px;
        border-left-color: #fff;
    }

    div#du-body.du-body .leaflet-tooltip-right:before {
        margin-left: -12px;
        border-right-color: #fff;
    }

    div#du-body.du-body .leaflet-container .du-lf-shadow {
        box-shadow: 0 0 4px #555555;
        -webkit-filter: drop-shadow(0 0 4px #555555);
        filter: drop-shadow(0 0 4px #555555);
    }

    div#du-body.du-body a#du-btn-full-screen {
        position: relative;
        z-index: 1;
        /*background: no-repeat scroll 0 0 transparent;*/
        background-size: 90% auto;
        background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAAyCAYAAAF+GijuAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDYuMC1jMDAzIDc5LjE2NDUyNywgMjAyMC8xMC8xNS0xNzo0ODozMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIyLjEgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkFBM0UxN0I5Qzk3NjExRURBRUUyQkNFRTFCRkY3QzRGIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkFBM0UxN0JBQzk3NjExRURBRUUyQkNFRTFCRkY3QzRGIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QUEzRTE3QjdDOTc2MTFFREFFRTJCQ0VFMUJGRjdDNEYiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QUEzRTE3QjhDOTc2MTFFREFFRTJCQ0VFMUJGRjdDNEYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4I2ApnAAADmElEQVR42mL8//8/Ay7AhEuCkZHxPwuMs2nTJhQjgCYy4tSJ11gQYIGZDzIGw158rgUIILySLDi8AaKEWaDeALse2RtA6i35XmFEMgrTQfhcCxBAYB3EYijQBGljYSAN/Ic6kxFFI3pQYHEdI1EhQExEw/i2GzduZCRGIzieQSkEFsR4QxIJAAQQI7EKSYplbIkKiC2A+C2pgcMLxE+AmI9UjfxQjazo8YjPw37A8NhMjh83kR04dNe4H0UjNG5AWBaW8nFgJ/ScbAfE94D4AzDUvhCdGIAYpFgAiP+QkvzITqsAAUS2RmLSNRS8gWbfv0D8nomB9kACmsQ9gViMhYYWgcz+DcQaSMU3H04LoeUkCOwDYkciLQEliEgg3gKMqj/I9QTeygqt1CYF8AAxKKN/BvmGqlmRiPKMgZ4WMgwZC1vJzYaEqkVkMVCb4BoQcwHlvtPKh6BUpQpNlbehLvxOyyAFJecrULYaLeMQIIBoVpbSNZUiVXrqQPwBiN+DGif0yBYPgNgMiO8AsRA9LPwJzVqiQPyKmLKUUrAKiNWBWAFac9DUwtVAbAHEslA+Ky2DdDrUZ7JEZwtofegLxMug+ZTYNhq4ueXn50d85w0KfNDbo0QAR6SeD8n5cBm9Mz7viKgPRy0c2hbup7eFTmSaibfhhdxDRMabkFpfpOIaUptzl0DtG2AZG0WrILWDVR3QhtRrII6iZcL5DLXwEnL5ScoYFykYFKTvgfgjEF8FYm9kC2nSwALiT9CC+g9yzUwzC+ndLgUIMLpbOOyLUio16GFYC4h/g8ZEofRPKBuEPw05D2IB16B5CoR3ATEbED8E4q/QYagh70EWaNH4G9riVkPqVbPQoyNDKwDqBWyE1tdXoZ57glRKwotnmlUItMBAwAmNsf/Qik0TXyiA9JAcg0jjiwMBTKCxJwfEj2ldirZAQ5IeGGQXw8aNGw8DYwU0CfKY2Gk2cj0IGh2upmPMVUPtpFs96DgAydORnh4cbcmMenDUg6MepKkHPw+AW7/Q04PRA+DBKHp6cDN0OMAfOiL2lQYe+go12w9q12ayTCGyRy8DbdyCFE8fSg10QjGoDm3UgvBNaFckcygWMr+hWBgtxm4A8XEGyIR/KNLI1JDzIGgu+R0QKzNA5hORYyxsgEpN6ozjQGfsQTOxQlCxM0CcC/UwMwNkxdFPMvLtoPIgaPZXEClWYYPeoCRpDY3NoevB4QwAPPOdHCxLbaMAAAAASUVORK5CYII=");
    }

    div#du-body.du-body #du-map-holder.du-full-screen a#du-btn-full-screen {
        background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAAyCAYAAAF+GijuAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDYuMC1jMDAzIDc5LjE2NDUyNywgMjAyMC8xMC8xNS0xNzo0ODozMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIyLjEgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkIxQjhBOTZDQzk3NjExRURCRkZGRTkyOUY4MTRFNTNGIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkIxQjhBOTZEQzk3NjExRURCRkZGRTkyOUY4MTRFNTNGIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QjFCOEE5NkFDOTc2MTFFREJGRkZFOTI5RjgxNEU1M0YiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QjFCOEE5NkJDOTc2MTFFREJGRkZFOTI5RjgxNEU1M0YiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4MygKfAAAEvklEQVR42mLcuHEjAy7AAqX/Y5NkwiZ48+ZN3JLq6uqoksHBwdiN/fXrF8PatWuxS7Kxsa3FYnoMQAAx4vMKE9QbKPjt27dgGsO10dHRDMLCwti9snTpUlQHPX78GKedDIyMjDglGWVkZLDJMQIEEMwr/xlIA11MxKgKCgpiAHqd4fv37zChMhZiNK5bt464ZEAMQNH49+9fhmfPnpGukZmZmUFKSooojQABhDeB4AN48wE+C5lI0eTv7w9jriEqVD9//gzWhOStYKI0xsTEMEydOhWrH/ECbAFInQRAtkZQACCFHGk2cnBwkJQA0IObEHgIsjEMV8jhAQogjauBmB2IfxOh4QEouYEYAAGEnshvA7EKA/UBqORehxw2oDJQhoF2AFbms8NikaqWPX36FBy5oIIIPZsxUcuSiIgIhtu3b4MtkpCQACcKUAGGBtioZiE/Pz9DQ0MDAxcXF0N8fDzh9E0pmDlzJm3zPt0LG5pYCEploEQQHh5OWwt//PgBtujDhw/g1FZXV0c1CzESzbVr1xjExMRQyjptbW1q2RcLsxBUzk0G4hwtLS1aRR/Irr8AAUR2g4EacRiIrcVKBXwbm4WdsNKcBkAFuREEspAN1OCkQ2g+gVm4lBam5+XlMUyfPh1ZSBpmoS+1LUtKSmKQlpZmyMzMxJpo2KlhCahfAPOZhoYGQ3l5OW3LUh4eHobU1FSwz8rKymhfeH/8+JGBj4+PITY2luH379+0txDkw+fPnzMUFxczvHr1ivYVMHLndLQCHrWQ6pUi3pID1K7h5ORkWLFiBW19CBqJMDAwADc3mJiYaB+kvb29DG/evGGYMWMGtj4CdYO0trYW3GKbPHky2DJqttpAPryF7jNQuQiyDDaiQsVWG9jCJmQB0LDTpEmTaJZKyR08IweA+varmahdiOMAU6FjAvBU+hfaGI6BDgBQA/yGdrVBLYocmCBAgHatXidhMIpeDYx9AExMBxmcWJhc+gwOOBhHFp6AwZFUQ4QEJgYGFhISYoyDCz4ArLKw1QGCL4BdIIT4netXrQq1CNJ+hJOcNGk69OR+P/eee70SYWRzp5InggfyXRhgyyzwSfAeLozgxM82RE1+vaE0daX8QvBY8tz1/kbwUq6QHwdbSnCqgDgvZKWG1HeBF84mUQG4UUzT5Mp5AW7l/v4QeKWCsOFwyGVEOp3mhCAe9/QgTfce1MMiotfr8RO1kGPToW8CR20wGFAikaBms+nHRdY3cT8sjVzu/WJuNBrcfcnn89Tv98kwDCqXy/O8yb/lh0EBApBAZTIZLr+SySSVSqWlhQWWcf+G2WzGHh/ERSIR6na7nIyDi9qSSkVwXZVEaCOofFG4E7gTuBO42imK7iPcVsdZwNCIMzgCC9FvWy20AuHTILuAV4OxhWq1SpZlbc8SjUajFIvFqF6vs5U9Go2oWCxyB3adflEgEYRjA3uo3W6TrutUq9V4PAqRtG071HvwVVBb9BEigyh1Oh0WVKlUuBnhQNO0uUNPAWPiFvjoroLdQHOq1Wp9iZgieOBDUJpOMJOe6X+HSzaJF8EjwfG+K5yHgoUtEFeQgRrPO0Vh2uzJ5WopJAr/eib/PevnFL2jz3klpfEGo2ON19aDvMgAAAAASUVORK5CYII=");
    }

    /*****
     * Mobile
     */

    div#du-body.du-body.du-mobile #du-map {
        height: 300px;
    }

    div#du-body.du-body.du-mobile .leaflet-top .leaflet-control {
        margin-top: 5px;
    }

    div#du-body.du-body.du-mobile .leaflet-bottom .leaflet-control {
        margin-bottom: 5px;
    }

    div#du-body.du-body.du-mobile .leaflet-left .leaflet-control {
        margin-left: 5px;
    }

    div#du-body.du-body.du-mobile .leaflet-right .leaflet-control {
        margin-right: 5px;
    }