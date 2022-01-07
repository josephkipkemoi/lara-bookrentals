@foreach (Auth::user()->assignments as $assignment)
                        <h6>Category: <span class="btn btn-secondary btn-sm">{{$assignment->category}}</span></h6>
                        <span>Rate your answer from 0 to 10</span>
                        <h2>{{$assignment->question}}</h2>
                        <div class="d-flex">
                            <div class="p-2">
                                <label for="radio_zero">0</label><br/>
                                <input id="radio_zero" type="radio" name="rating" value="0"/>
                            </div>
                            <div class="p-2">
                                <label for="radio_one">1</label><br/>
                                <input id="radio_one" type="radio" name="rating" value="1"/>
                            </div>
                            <div class="p-2">
                                <label for="radio_two">2</label><br/>
                                <input id="radio_two" type="radio" name="rating"/>
                            </div>
                            <div class="p-2">
                                <label for="radio_three">3</label><br/>
                                <input id="radio_three" type="radio" name="rating"/>
                            </div>
                            <div class="p-2">
                                <label for="radio_four">4</label><br/>
                                <input id="radio_four" type="radio" name="rating"/>
                            </div>
                            <div class="p-2">
                                <label for="radio_five">5</label><br/>
                                <input id="radio_five" type="radio" name="rating"/>
                            </div>
                            <div class="p-2">
                                <label for="radio_six">6</label><br/>
                                <input id="radio_six" type="radio" name="rating"/>
                            </div>
                            <div class="p-2">
                                <label for="radio_seven">7</label><br/>
                                <input id="radio_seven" type="radio" name="rating"/>
                            </div>
                            <div class="p-2">
                                <label for="radio_eight">8</label><br/>
                                <input id="radio_eight" type="radio" name="rating"/>
                            </div>
                            <div class="p-2">
                                <label for="radio_nine">9</label><br/>
                                <input id="radio_nine" type="radio" name="rating"/>
                            </div>
                            <div class="p-2">
                                <label for="radio_ten">10</label><br/>
                                <input id="radio_ten" type="radio" name="rating"/>
                            </div>
                        </div>

                                @if($assignment->locked === 1)
                                <button class="btn btn-primary" disabled>Submit</button>
                                @else
                                <button class="btn btn-primary">Submit</button>
                                @endif

                        <hr/>
                    @endforeach
