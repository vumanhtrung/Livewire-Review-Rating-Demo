<div class="col-lg-4">
    <article class="card">
        <div class="card-body"> <a href="#" class="btn w-100 btn-primary-light">Write review</a>
            <div class="rating-wrap mt-3">
                <ul class="rating-stars stars-lg">
                    <li style="width:{{ $avgRating * 20 }}%" class="stars-active"> <img
                            src="{{ url('images/misc/stars-active.svg') }}" alt=""> </li>
                    <li> <img height="520" src="{{ url('images/misc/starts-disable.svg') }}"
                            alt=""> </li>
                </ul> <b class="label-rating text-lg"> {{ round($avgRating, 1) }} out of 5 </b>
            </div>
            <p class="mt-1 text-muted"> {{ $totalReviews }} reviews </p>
            <table class="table table-borderless table-sm">
                <tr valign="middle">
                    <td width="50"> 5 star </td>
                    <td>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 95%;"
                                aria-valuenow="25" aria-valuemax="100"></div>
                        </div>
                    </td>
                    <td width="50"> 95 % </td>
                </tr>
                <tr valign="middle">
                    <td> 4 star </td>
                    <td>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 80%;"
                                aria-valuenow="80" aria-valuemax="100"></div>
                        </div>
                    </td>
                    <td> 80 % </td>
                </tr>
                <tr valign="middle">
                    <td> 3 star </td>
                    <td>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 35%;"
                                aria-valuenow="35" aria-valuemax="100"></div>
                        </div>
                    </td>
                    <td> 35 % </td>
                </tr>
                <tr valign="middle">
                    <td> 2 star </td>
                    <td>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 13%;"
                                aria-valuenow="13" aria-valuemax="100"></div>
                        </div>
                    </td>
                    <td> 13 % </td>
                </tr>
                <tr valign="middle">
                    <td> 1 star </td>
                    <td>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width:15%;"
                                aria-valuenow="5" aria-valuemax="100"></div>
                        </div>
                    </td>
                    <td> 15 % </td>
                </tr>
            </table>
        </div>
    </article>
</div>
